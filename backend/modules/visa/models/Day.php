<?php

namespace backend\modules\visa\models;

use Yii;
use backend\components\AuditEntryBehaviors;

/**
 * This is the model class for table "Day".
 *
 * @property int $DayId
 * @property string $DayName
 * @property int $IsActive 1=Active
 * @property string $CreatedOn
 * @property string $LastUpdated
 *
 * @property BookingTime[] $bookingTimes
 */
class Day extends \yii\db\ActiveRecord
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
        return 'Day';
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
            [['DayName', 'CreatedOn'], 'required'],
            [['IsActive'], 'integer'],
            [['CreatedOn', 'LastUpdated'], 'safe'],
            [['DayName'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'DayId' => 'Day ID',
            'DayName' => 'Day Name',
            'IsActive' => 'Is Active',
            'CreatedOn' => 'Created On',
            'LastUpdated' => 'Last Updated',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingTimes()
    {
        return $this->hasMany(BookingTime::className(), ['DayId' => 'DayId']);
    }
}
