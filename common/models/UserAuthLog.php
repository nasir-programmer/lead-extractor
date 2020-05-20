<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "UserAuthLog".
 *
 * @property int $id
 * @property int|null $userId
 * @property string $username
 * @property string $password_log
 * @property string $date
 * @property int|null $cookieBased
 * @property string|null $duration
 * @property string|null $error
 * @property string $ip
 * @property string $host
 * @property string $url
 * @property string $userAgent
 * @property int $login
 */
class UserAuthLog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'UserAuthLog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'cookieBased', 'login'], 'integer'],
            [['username', 'password_log', 'ip', 'host', 'url', 'userAgent'], 'required'],
            [['date'], 'safe'],
            [['error'], 'string'],
            [['username', 'password_log', 'ip', 'host', 'url', 'userAgent'], 'string', 'max' => 255],
            [['duration'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'userId' => 'User ID',
            'username' => 'Username',
            'password_log' => 'Password Log',
            'date' => 'Date',
            'cookieBased' => 'Cookie Based',
            'duration' => 'Duration',
            'error' => 'Error',
            'ip' => 'Ip',
            'host' => 'Host',
            'url' => 'Url',
            'userAgent' => 'User Agent',
            'login' => 'Login',
        ];
    }
}
