<?php

namespace backend\modules\visa\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\visa\models\Booking;

/**
 * BookingSearch represents the model behind the search form of `backend\modules\visa\models\Booking`.
 */
class BookingSearch extends Booking
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['BookingId', 'UserId', 'BookingTypeId', 'GolfTypeId', 'GolfCourseId', 'BookingStatusId', 'PaymentStatusId', 'IsPreAuthVerified', 'IsActive'], 'integer'],
            [['BookingDate', 'BookingTime', 'BookingTimeConfirmed', 'Remarks', 'CancelReason', 'CreatedOn', 'LastUpdated', 'CancellationDateTime'], 'safe'],
            [['Amount', 'Discount', 'PayableAmount'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Booking::find()->orderBy(['BookingId' => SORT_DESC]);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'BookingId' => $this->BookingId,
            'UserId' => $this->UserId,
            'BookingTypeId' => $this->BookingTypeId,
            'GolfTypeId' => $this->GolfTypeId,
            'GolfCourseId' => $this->GolfCourseId,
            'BookingDate' => $this->BookingDate,
            'BookingTime' => $this->BookingTime,
            'BookingTimeConfirmed' => $this->BookingTimeConfirmed,
            'Amount' => $this->Amount,
            'Discount' => $this->Discount,
            'PayableAmount' => $this->PayableAmount,
            'BookingStatusId' => $this->BookingStatusId,
            'PaymentStatusId' => $this->PaymentStatusId,
            'IsPreAuthVerified' => $this->IsPreAuthVerified,
            'IsActive' => $this->IsActive,
            'CreatedOn' => $this->CreatedOn,
            'LastUpdated' => $this->LastUpdated,
            'CancellationDateTime' => $this->CancellationDateTime,
        ]);

        $query->andFilterWhere(['like', 'Remarks', $this->Remarks])
            ->andFilterWhere(['like', 'CancelReason', $this->CancelReason]);

        return $dataProvider;
    }
}
