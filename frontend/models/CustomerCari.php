<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Customer;

/**
 * CustomerCari represents the model behind the search form of `frontend\models\Customer`.
 */
class CustomerCari extends Customer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_customer', 'nama_lengkap', 'uname', 'password', 'alamat', 'desa', 'kecamatan', 'no_telp', 'email'], 'safe'],
            [['posisi_lat', 'posisi_lng'], 'number'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Customer::find();

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
            'posisi_lat' => $this->posisi_lat,
            'posisi_lng' => $this->posisi_lng,
        ]);

        $query->andFilterWhere(['like', 'id_customer', $this->id_customer])
            ->andFilterWhere(['like', 'nama_lengkap', $this->nama_lengkap])
            ->andFilterWhere(['like', 'uname', $this->uname])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'desa', $this->desa])
            ->andFilterWhere(['like', 'kecamatan', $this->kecamatan])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
