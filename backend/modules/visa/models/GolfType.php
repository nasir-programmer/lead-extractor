<?php

namespace backend\modules\visa\models;

use Yii;

/**
 * This is the model class for table "GolfType".
 *
 * @property int $GolfTypeId
 * @property string $Name
 * @property int $IsActive 1=Active
 * @property string $CreatedOn
 * @property string $LastUpdated
 *
 * @property Booking[] $bookings
 * @property GolfCourse[] $golfCourses
 */
class GolfType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'GolfType';
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
            [['Name', 'IsActive', 'CreatedOn'], 'required'],
            [['IsActive'], 'integer'],
            [['CreatedOn', 'LastUpdated'], 'safe'],
            [['Name'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'GolfTypeId' => 'Golf Type ID',
            'Name' => 'Golf Type',
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
        return $this->hasMany(Booking::className(), ['GolfTypeId' => 'GolfTypeId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGolfCourses()
    {
        return $this->hasMany(GolfCourse::className(), ['GolfTypeId' => 'GolfTypeId']);
    }
}
