<?php

namespace backend\modules\visa\models;

use Yii;

/**
 * This is the model class for table "User".
 *
 * @property int $UserId
 * @property string $FirstName
 * @property string $LastName
 * @property string $CountryCode
 * @property string $Phone
 * @property string $Email
 * @property string $UserName
 * @property string $Password
 * @property int $IsPreAuthVerified 1=Yes
 * @property int $IsActive 1=Active
 * @property string $CreatedOn
 * @property string $LastUpdated
 *
 * @property Booking[] $bookings
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'User';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('Visa');
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FirstName', 'LastName', 'CountryCode', 'Phone', 'Email', 'UserName', 'Password', 'IsPreAuthVerified', 'CreatedOn'], 'required'],
            [['IsPreAuthVerified', 'IsActive'], 'integer'],
            [['CreatedOn', 'LastUpdated'], 'safe'],
            [['FirstName', 'LastName', 'Phone', 'UserName'], 'string', 'max' => 50],
            [['CountryCode'], 'string', 'max' => 10],
            [['Email'], 'string', 'max' => 100],
            [['Password'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'UserId' => 'User ID',
            'FirstName' => 'First Name',
            'LastName' => 'Last Name',
            'CountryCode' => 'Country Code',
            'Phone' => 'Phone',
            'Email' => 'Email',
            'UserName' => 'User Name',
            'Password' => 'Password',
            'IsPreAuthVerified' => 'Is Pre Auth Verified',
            'IsActive' => 'Is Active',
            'CreatedOn' => 'Created On',
            'LastUpdated' => 'Last Updated',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::className(), ['UserId' => 'UserId']);
    }
}
