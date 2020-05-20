<?php

namespace backend\modules\visa\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\visa\models\BookingStatus;

/**
 * BookingStatusSearch represents the model behind the search form of `backend\modules\visa\models\BookingStatus`.
 */
class BookingStatusSearch extends BookingStatus
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['BookingStatusId', 'IsActive'], 'integer'],
            [['Name', 'CreatedOn', 'LastUpdated'], 'safe'],
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
        $query = BookingStatus::find();

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
            'BookingStatusId' => $this->BookingStatusId,
            'IsActive' => $this->IsActive,
            'CreatedOn' => $this->CreatedOn,
            'LastUpdated' => $this->LastUpdated,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name]);

        return $dataProvider;
    }
}
