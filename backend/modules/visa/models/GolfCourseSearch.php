<?php

namespace backend\modules\visa\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\visa\models\GolfCourse;

/**
 * GolfCourseSearch represents the model behind the search form of `backend\modules\visa\models\GolfCourse`.
 */
class GolfCourseSearch extends GolfCourse
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['GolfCourseId', 'GolfTypeId', 'GCBucketId', 'IsActive'], 'integer'],
            [['Name', 'City', 'CreatedOn', 'LastUpdated'], 'safe'],
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
        $query = GolfCourse::find();

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
            'GolfCourseId' => $this->GolfCourseId,
            'GolfTypeId' => $this->GolfTypeId,
            'GCBucketId' => $this->GCBucketId,
            'IsActive' => $this->IsActive,
            'CreatedOn' => $this->CreatedOn,
            'LastUpdated' => $this->LastUpdated,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'City', $this->City]);

        return $dataProvider;
    }
}
