<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\HistoryCustomer;

/**
 * HistoryCustomerSearch represents the model behind the search form of `backend\models\HistoryCustomer`.
 */
class HistoryCustomerSearch extends HistoryCustomer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idhistori', 'ordercustomer_id'], 'integer'],
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
        $query = HistoryCustomer::find();

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
            'idhistori' => $this->idhistori,
            'ordercustomer_id' => $this->ordercustomer_id,
        ]);

        return $dataProvider;
    }
}
