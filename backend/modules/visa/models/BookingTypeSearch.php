<?php

namespace backend\modules\visa\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\visa\models\BookingType;

/**
 * BookingTypeSearch represents the model behind the search form of `backend\modules\visa\models\BookingType`.
 */
class BookingTypeSearch extends BookingType
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['BookingTypeId', 'IsActive'], 'integer'],
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
        $query = BookingType::find();

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
            'BookingTypeId' => $this->BookingTypeId,
            'IsActive' => $this->IsActive,
            'CreatedOn' => $this->CreatedOn,
            'LastUpdated' => $this->LastUpdated,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name]);

        return $dataProvider;
    }
}
