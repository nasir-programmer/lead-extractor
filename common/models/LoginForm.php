<?php
namespace common\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = false;

    private $_user;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
            ['password', 'resetPasswordRequired'],
        ];
    }
    public function behaviors()
{
    $behaviors = parent::behaviors();

    $behaviors[] = [
        'class' => '\backend\components\LoginAttemptBehavior',

        'attempts' => 3,

        'duration' => 300,

        'durationUnit' => 'second',

        'disableDuration' => 900,

        'disableDurationUnit' => 'second',

        'usernameAttribute' => 'username',

        'passwordAttribute' => 'password',

        'message' => 'Login disabled',
    ];

    return $behaviors;
}
    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        $model = new \common\models\UserAuthLog();
        $data = Yii::$app->request->post();

        $model->username = $data['LoginForm']['username'];
        $model->password_log = \common\models\User::PasswordForLog($data['LoginForm']['password']);
        $model->ip = Yii::$app->request->getUserIP();
        $model->host = @gethostbyaddr(Yii::$app->request->getUserIP());
        $model->url = Yii::$app->request->getAbsoluteUrl();
        $model->userAgent = Yii::$app->request->getUserAgent();
        $model->save();

        if ($this->validate()) {
            $model->login = 1;
            $model->save();
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
        }
        
        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }

    public function resetPasswordRequired($attribute, $params)
    {
        $passwordExpiry = User::find()
        ->andWhere( [ 'username' => $this->username] )
        ->andWhere( ['status' => 10] )
        ->andWhere( ['>', 'password_hash_updated_at', date('Y-m-d H:m:s', strtotime("-14 days"))] )
        ->asArray() 
        ->one();
        if(!($passwordExpiry)){
            $this->addError($attribute, json_encode("Your Password are too old please change"));
        } 

    }
}
