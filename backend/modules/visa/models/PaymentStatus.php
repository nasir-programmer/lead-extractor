<?php

namespace backend\modules\visa\models;

use Yii;

/**
 * This is the model class for table "PaymentStatus".
 *
 * @property int $PaymentStatusId
 * @property string $Name
 * @property int $IsActive 1=Active
 * @property string $CreatedOn
 * @property string $LastUpdated
 *
 * @property Booking[] $bookings
 */
class PaymentStatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'PaymentStatus';
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
            [['Name', 'CreatedOn', 'LastUpdated'], 'required'],
            [['IsActive'], 'integer'],
            [['CreatedOn', 'LastUpdated'], 'safe'],
            [['Name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'PaymentStatusId' => 'Payment Status ID',
            'Name' => 'Name',
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
        return $this->hasMany(Booking::className(), ['PaymentStatusId' => 'PaymentStatusId']);
    }
}
