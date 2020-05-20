<?php

namespace backend\modules\visa\models;

use Yii;

/**
 * This is the model class for table "GolfCourse".
 *
 * @property int $GolfCourseId
 * @property int $GolfTypeId
 * @property int $GCBucketId
 * @property string $Name
 * @property string $City
 * @property int $IsActive 1=Active
 * @property string $CreatedOn
 * @property string $LastUpdated
 *
 * @property BookingTime[] $bookingTimes
 * @property GolfType $golfType
 */
class GolfCourse extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'GolfCourse';
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
            [['GolfTypeId', 'GCBucketId', 'Name', 'City', 'CreatedOn'], 'required'],
            [['GolfTypeId', 'GCBucketId', 'IsActive'], 'integer'],
            [['CreatedOn', 'LastUpdated'], 'safe'],
            [['Name'], 'string', 'max' => 100],
            [['City'], 'string', 'max' => 50],
            [['GolfTypeId'], 'exist', 'skipOnError' => true, 'targetClass' => GolfType::className(), 'targetAttribute' => ['GolfTypeId' => 'GolfTypeId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'GolfCourseId' => 'Golf Course ID',
            'GolfTypeId' => 'Golf Type ID',
            'GCBucketId' => 'Gc Bucket ID',
            'Name' => 'GolfCourse Name',
            'City' => 'City',
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
        return $this->hasMany(BookingTime::className(), ['GolfCourseId' => 'GolfCourseId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGolfType()
    {
        return $this->hasOne(GolfType::className(), ['GolfTypeId' => 'GolfTypeId']);
    }
}
