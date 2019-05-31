<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\OrderTipers;

/**
 * OrderTipersSearch represents the model behind the search form of `frontend\models\OrderTipers`.
 */
class OrderTipersSearch extends OrderTipers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idordertipers', 'fee', 'lokasi_id', 'user_id'], 'integer'],
            [['catatan'], 'safe'],
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
        $query = OrderTipers::find();

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
            'idordertipers' => $this->idordertipers,
            'fee' => $this->fee,
            'lokasi_id' => $this->lokasi_id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'catatan', $this->catatan]);

        return $dataProvider;
    }
}
