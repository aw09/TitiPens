<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\OrderItemCustomer;

/**
 * OrderItemCustomerSearch represents the model behind the search form of `backend\models\OrderItemCustomer`.
 */
class OrderItemCustomerSearch extends OrderItemCustomer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idorderitem', 'ordercustomer_id', 'menuwarung_id', 'jumlah', 'total'], 'integer'],
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
        $query = OrderItemCustomer::find();

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
            'idorderitem' => $this->idorderitem,
            'ordercustomer_id' => $this->ordercustomer_id,
            'menuwarung_id' => $this->menuwarung_id,
            'jumlah' => $this->jumlah,
            'total' => $this->total,
        ]);

        return $dataProvider;
    }
}
