<?php
namespace frontend\models;

use yii\base\InvalidArgumentException;
use yii\base\Model;
use common\models\User;

/**
 * Password reset form
 */
class ResetPasswordForm extends Model
{
    public $password;

    /**
     * @var \common\models\User
     */
    private $_user;


    /**
     * Creates a form model given a token.
     *
     * @param string $token
     * @param array $config name-value pairs that will be used to initialize the object properties
     * @throws InvalidArgumentException if token is empty or not valid
     */
    public function __construct($token, $config = [])
    {
        if (empty($token) || !is_string($token)) {
            throw new InvalidArgumentException('Password reset token cannot be blank.');
        }
        $this->_user = User::findByPasswordResetToken($token);
        if (!$this->_user) {
            throw new InvalidArgumentException('Wrong password reset token.');
        }
        parent::__construct($config);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['password', 'required'],
            ['password', 'string', 'min' => 8],
            ['password', 'match', 'pattern' => '/^.*(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/', 'message' => 'New password must contain at least one lower and upper case character and a digit.'],
            ['password', 'checkSixtyDaysOld']
        ];
    }

    public function checkSixtyDaysOld($attribute, $params)
    {
        $passLog = \common\models\UserAuthLog::find()
            ->andWhere(
                [ 'password_log' => \common\models\User::PasswordForLog($this->password) ])
            ->andWhere( ['login' => 1] )
            ->andWhere( ['>', 'date', date('Y-m-d H:m:s', strtotime("-60 days"))] )
            ->asArray() 
            ->one();

            if(!empty($passLog)){
                $this->addError($attribute,' You Already used this password on '.($passLog['date']));
            }
    }

    /**
     * Resets password.
     *
     * @return bool if password was reset.
     */
    public function resetPassword()
    {
        $user = $this->_user;
        $user->setPassword($this->password);
        $user->removePasswordResetToken();

        return $user->save(false);
    }
}
