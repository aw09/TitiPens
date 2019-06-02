<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\OrderCustomer;

/**
 * OrderCustomerSearch represents the model behind the search form of `backend\models\OrderCustomer`.
 */
class OrderCustomerSearch extends OrderCustomer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idordercustomer', 'ordertipers_id', 'user_id', 'total', 'status_id'], 'integer'],
            [['tanggal', 'lokasi', 'catatan'], 'safe'],
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
        $query = OrderCustomer::find();

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
            'idordercustomer' => $this->idordercustomer,
            'ordertipers_id' => $this->ordertipers_id,
            'tanggal' => $this->tanggal,
            'user_id' => $this->user_id,
            'total' => $this->total,
            'status_id' => $this->status_id,
        ]);

        $query->andFilterWhere(['like', 'lokasi', $this->lokasi])
            ->andFilterWhere(['like', 'catatan', $this->catatan]);

        return $dataProvider;
    }
}
