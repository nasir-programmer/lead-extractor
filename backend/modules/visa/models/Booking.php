<?php

namespace backend\modules\visa\models;

use Yii;
use backend\components\AuditEntryBehaviors;
/**
 * This is the model class for table "Booking".
 *
 * @property int $BookingId
 * @property int $UserId
 * @property int $BookingTypeId
 * @property int $GolfTypeId
 * @property int $GolfCourseId
 * @property string $BookingDate
 * @property string $BookingTime
 * @property string $BookingTimeConfirmed
 * @property double $Amount
 * @property double $Discount
 * @property double $PayableAmount
 * @property int $BookingStatusId
 * @property int $PaymentStatusId
 * @property int $IsPreAuthVerified 1=Yes
 * @property string $Remarks
 * @property string $CancelReason
 * @property int $IsActive 1=Active
 * @property string $CreatedOn
 * @property string $LastUpdated
 * @property string $CancellationDateTime
 *
 * @property User $user
 * @property BookingStatus $bookingStatus
 * @property BookingType $bookingType
 * @property GolfType $golfType
 * @property PaymentStatus $paymentStatus
 */
class Booking extends \yii\db\ActiveRecord
{

    public function behaviors(){
        return [ 
            
            'auditEntryBehaviors' => [
                'class' => AuditEntryBehaviors::class
             ],
            
        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Booking';
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
            [['UserId', 'BookingTypeId', 'GolfTypeId', 'GolfCourseId', 'BookingDate', 'BookingTime', 'BookingStatusId', 'PaymentStatusId', 'CreatedOn'], 'required'],
            [['UserId', 'BookingTypeId', 'GolfTypeId', 'GolfCourseId', 'BookingStatusId', 'PaymentStatusId', 'IsPreAuthVerified', 'IsActive'], 'integer'],
            [['BookingDate', 'BookingTime', 'BookingTimeConfirmed', 'CreatedOn', 'LastUpdated', 'CancellationDateTime'], 'safe'],
            [['Amount', 'Discount', 'PayableAmount'], 'number'],
            [['CancelReason'], 'string'],
            [['Remarks'], 'string', 'max' => 200],
            [['UserId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['UserId' => 'UserId']],
            [['BookingStatusId'], 'exist', 'skipOnError' => true, 'targetClass' => BookingStatus::className(), 'targetAttribute' => ['BookingStatusId' => 'BookingStatusId']],
            [['BookingTypeId'], 'exist', 'skipOnError' => true, 'targetClass' => BookingType::className(), 'targetAttribute' => ['BookingTypeId' => 'BookingTypeId']],
            [['GolfTypeId'], 'exist', 'skipOnError' => true, 'targetClass' => GolfType::className(), 'targetAttribute' => ['GolfTypeId' => 'GolfTypeId']],
            [['PaymentStatusId'], 'exist', 'skipOnError' => true, 'targetClass' => PaymentStatus::className(), 'targetAttribute' => ['PaymentStatusId' => 'PaymentStatusId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'BookingId' => 'Booking ID',
            'UserId' => 'User ID',
            'BookingTypeId' => 'Booking Type ID',
            'GolfTypeId' => 'Golf Type ID',
            'GolfCourseId' => 'Golf Course ID',
            'BookingDate' => 'Booking Date',
            'BookingTime' => 'Booking Time',
            'BookingTimeConfirmed' => 'Booking Time Confirmed',
            'Amount' => 'Amount',
            'Discount' => 'Discount',
            'PayableAmount' => 'Payable Amount',
            'BookingStatusId' => 'Booking Status ID',
            'PaymentStatusId' => 'Payment Status ID',
            'IsPreAuthVerified' => 'Is Pre Auth Verified',
            'Remarks' => 'Remarks',
            'CancelReason' => 'Cancel Reason',
            'IsActive' => 'Is Active',
            'CreatedOn' => 'Created On',
            'LastUpdated' => 'Last Updated',
            'CancellationDateTime' => 'Cancellation Date Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['UserId' => 'UserId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingStatus()
    {
        return $this->hasOne(BookingStatus::className(), ['BookingStatusId' => 'BookingStatusId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingType()
    {
        return $this->hasOne(BookingType::className(), ['BookingTypeId' => 'BookingTypeId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGolfType()
    {
        return $this->hasOne(GolfType::className(), ['GolfTypeId' => 'GolfTypeId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaymentStatus()
    {
        return $this->hasOne(PaymentStatus::className(), ['PaymentStatusId' => 'PaymentStatusId']);
    }

    public function getGolfCourse()
    {
        return $this->hasOne(GolfCourse::className(), ['GolfCourseId' => 'GolfCourseId']);
    }
}
