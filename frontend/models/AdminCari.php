<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Admin;

/**
 * AdminCari represents the model behind the search form of `frontend\models\Admin`.
 */
class AdminCari extends Admin
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_admin', 'nama', 'uname', 'password', 'alamat', 'desa', 'kecamatan', 'jk', 'kriteria', 'no_telp'], 'safe'],
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
        $query = Admin::find();

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
        $query->andFilterWhere(['like', 'id_admin', $this->id_admin])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'uname', $this->uname])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'desa', $this->desa])
            ->andFilterWhere(['like', 'kecamatan', $this->kecamatan])
            ->andFilterWhere(['like', 'jk', $this->jk])
            ->andFilterWhere(['like', 'kriteria', $this->kriteria])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp]);

        return $dataProvider;
    }
}
