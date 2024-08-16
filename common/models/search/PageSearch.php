<?php

namespace common\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Page;

/**
 * PageSearch represents the model behind the search form of `common\models\Page`.
 */
class PageSearch extends Page
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'view', 'child_category_id'], 'integer'],
            [['title_uz', 'title_ru', 'title_en', 'image', 'content_uz', 'comtent_ru', 'content_en'], 'safe'],
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
        $query = Page::find();

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
            'view' => $this->view,
            'child_category_id' => $this->child_category_id,
        ]);

        $query->andFilterWhere(['like', 'title_uz', $this->title_uz])
            ->andFilterWhere(['like', 'title_ru', $this->title_ru])
            ->andFilterWhere(['like', 'title_en', $this->title_en])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'content_uz', $this->content_uz])
            ->andFilterWhere(['like', 'comtent_ru', $this->comtent_ru])
            ->andFilterWhere(['like', 'content_en', $this->content_en]);

        return $dataProvider;
    }
}
