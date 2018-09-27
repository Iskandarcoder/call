<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Appeal;

/**
 * AppealSearch represents the model behind the search form of `backend\models\Appeal`.
 */
class AppealSearch extends Appeal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'appeal', 'complaint', 'redirection', 'responsible', 'question_resolved', 'question_no_resolved', 'process_of_solving', 'resp_operator', 'to_email', 'to_mem_email'], 'integer'],
            [['time_to_call', 'description', 'surname', 'name', 'country_id', 'city_id', 'work_number', 'mobile_number', 'passport_data', 'name_department', 'anketa_call', 'note', 'connect', 'no_connect', 'refusal_answer', 'members'], 'safe'],
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
        $query = Appeal::find();

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
            'id' => $this->id,
            'time_to_call' => $this->time_to_call,
            'appeal' => $this->appeal,
            'complaint' => $this->complaint,
            'redirection' => $this->redirection,
            'responsible' => $this->responsible,
            'question_resolved' => $this->question_resolved,
            'question_no_resolved' => $this->question_no_resolved,
            'process_of_solving' => $this->process_of_solving,
            'resp_operator' => $this->resp_operator,
            'to_email' => $this->to_email,
            'to_mem_email' => $this->to_mem_email,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'surname', $this->surname])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'country_id', $this->country_id])
            ->andFilterWhere(['like', 'city_id', $this->city_id])
            ->andFilterWhere(['like', 'work_number', $this->work_number])
            ->andFilterWhere(['like', 'mobile_number', $this->mobile_number])
            ->andFilterWhere(['like', 'passport_data', $this->passport_data])
            ->andFilterWhere(['like', 'name_department', $this->name_department])
            ->andFilterWhere(['like', 'anketa_call', $this->anketa_call])
            ->andFilterWhere(['like', 'note', $this->note])
            ->andFilterWhere(['like', 'connect', $this->connect])
            ->andFilterWhere(['like', 'no_connect', $this->no_connect])
            ->andFilterWhere(['like', 'refusal_answer', $this->refusal_answer])
            ->andFilterWhere(['like', 'members', $this->members]);

        return $dataProvider;
    }
}