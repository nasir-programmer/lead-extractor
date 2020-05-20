<?php

namespace backend\modules\visa\models;

use Yii;

/**
 * This is the model class for table "CyberSourceLog".
 *
 * @property int $CyberSourceLogId
 * @property int $BookingId
 * @property int $UserId
 * @property string $LogData
 * @property int $IsActive 1=Active
 * @property string $CreatedOn
 * @property string $LastUpdated
 */
class CyberSourceLog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'CyberSourceLog';
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
            [['BookingId', 'LogData', 'CreatedOn', 'LastUpdated'], 'required'],
            [['BookingId', 'UserId', 'IsActive'], 'integer'],
            [['LogData'], 'string'],
            [['CreatedOn', 'LastUpdated'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CyberSourceLogId' => 'Cyber Source Log ID',
            'BookingId' => 'Booking ID',
            'UserId' => 'User ID',
            'LogData' => 'Log Data',
            'IsActive' => 'Is Active',
            'CreatedOn' => 'Created On',
            'LastUpdated' => 'Last Updated',
        ];
    }
    public function getUser()
    {
        return $this->hasOne(User::className(), ['UserId' => 'UserId']);
    }
}
