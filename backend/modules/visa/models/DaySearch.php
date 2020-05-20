<?php

namespace backend\modules\visa\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\visa\models\Day;

/**
 * DaySearch represents the model behind the search form of `backend\modules\visa\models\Day`.
 */
class DaySearch extends Day
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DayId', 'IsActive'], 'integer'],
            [['DayName', 'CreatedOn', 'LastUpdated'], 'safe'],
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
        $query = Day::find();

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
            'DayId' => $this->DayId,
            'IsActive' => $this->IsActive,
            'CreatedOn' => $this->CreatedOn,
            'LastUpdated' => $this->LastUpdated,
        ]);

        $query->andFilterWhere(['like', 'DayName', $this->DayName]);

        return $dataProvider;
    }
}
