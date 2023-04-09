<?php

namespace common\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Courses;

/**
 * CoursesSearch represents the model behind the search form of `common\models\Courses`.
 */
class CoursesSearch extends Courses
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'lecture_amount_counter', 'price'], 'integer'],
            [['main_image', 'details', 'name', 'start_date', 'theme'], 'safe'],
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
        $query = Courses::find();

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
            'lecture_amount_counter' => $this->lecture_amount_counter,
            'start_date' => $this->start_date,
            'price' => $this->price,
        ]);

        $query->andFilterWhere(['ilike', 'main_image', $this->main_image])
            ->andFilterWhere(['ilike', 'details', $this->details])
            ->andFilterWhere(['ilike', 'name', $this->name])
            ->andFilterWhere(['ilike', 'theme', $this->theme]);

        return $dataProvider;
    }
}
