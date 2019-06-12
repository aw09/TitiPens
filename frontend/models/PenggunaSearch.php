<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Pengguna;

/**
 * PenggunaSearch represents the model behind the search form of `frontend\models\Pengguna`.
 */
class PenggunaSearch extends Pengguna
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['iduser', 'nrp', 'angkatan'], 'integer'],
            [['nama', 'jurusan', 'foto', 'password'], 'safe'],
            [['rating'], 'number'],
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
        $query = Pengguna::find();

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
            'iduser' => $this->iduser,
            'nrp' => $this->nrp,
            'angkatan' => $this->angkatan,
            'rating' => $this->rating,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'jurusan', $this->jurusan])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'password', $this->password]);

        return $dataProvider;
    }
}
