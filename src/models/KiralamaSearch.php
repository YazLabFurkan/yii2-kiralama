<?php

namespace  mrpurposeless\kiralama\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use mrpurposeless\kiralama\models\Kiralama;

/**
 * KiralamaSearch represents the model behind the search form of ` mrpurposeless\kiralama\models\Kiralama`.
 */
class KiralamaSearch extends Kiralama
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['isim', 'soyisim', 'mail', 'telefonNo', 'markaModel', 'gecerlilikTarihi'], 'safe'],
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
        $query = Kiralama::find();

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
        ]);

        $query->andFilterWhere(['like', 'isim', $this->isim])
            ->andFilterWhere(['like', 'soyisim', $this->soyisim])
            ->andFilterWhere(['like', 'mail', $this->mail])
            ->andFilterWhere(['like', 'telefonNo', $this->telefonNo])
            ->andFilterWhere(['like', 'markaModel', $this->markaModel])
            ->andFilterWhere(['like', 'gecerlilikTarihi', $this->gecerlilikTarihi]);

        return $dataProvider;
    }
}
