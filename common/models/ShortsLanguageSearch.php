<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ShortsLanguage;

/**
 * ShortsLanguageSearch represents the model behind the search form of `common\models\ShortsLanguage`.
 */
class ShortsLanguageSearch extends ShortsLanguage
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'language_id', 'short_id'], 'integer'],
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
        $query = ShortsLanguage::find();

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
            'language_id' => $this->language_id,
            'short_id' => $this->short_id,
        ]);

        return $dataProvider;
    }
}
