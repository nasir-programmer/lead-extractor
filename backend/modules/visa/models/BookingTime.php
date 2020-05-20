<?php

namespace backend\modules\visa\models;

use Yii;

/**
 * This is the model class for table "BookingTime".
 *
 * @property int $BookingTimeId
 * @property int $GolfCourseId
 * @property int $DayId
 * @property string $OpenTime
 * @property string $CloseTime
 * @property int $IsActive 1=Active
 * @property string $CreatedOn
 * @property string $LastUpdated
 *
 * @property Day $day
 * @property GolfCourse $golfCourse
 */
class BookingTime extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'BookingTime';
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
            [['GolfCourseId', 'DayId', 'OpenTime', 'CloseTime', 'CreatedOn'], 'required'],
            [['GolfCourseId', 'DayId', 'IsActive'], 'integer'],
            [['OpenTime', 'CloseTime', 'CreatedOn', 'LastUpdated'], 'safe'],
            [['DayId'], 'exist', 'skipOnError' => true, 'targetClass' => Day::className(), 'targetAttribute' => ['DayId' => 'DayId']],
            [['GolfCourseId'], 'exist', 'skipOnError' => true, 'targetClass' => GolfCourse::className(), 'targetAttribute' => ['GolfCourseId' => 'GolfCourseId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'BookingTimeId' => 'Booking Time ID',
            'GolfCourseId' => 'Golf Course ID',
            'DayId' => 'Day ID',
            'OpenTime' => 'Open Time',
            'CloseTime' => 'Close Time',
            'IsActive' => 'Is Active',
            'CreatedOn' => 'Created On',
            'LastUpdated' => 'Last Updated',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDay()
    {
        return $this->hasOne(Day::className(), ['DayId' => 'DayId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGolfCourse()
    {
        return $this->hasOne(GolfCourse::className(), ['GolfCourseId' => 'GolfCourseId']);
    }
}
