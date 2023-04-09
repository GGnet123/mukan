<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "reviews".
 *
 * @property int $id
 * @property int|null $rating
 * @property string|null $text
 */
class Reviews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reviews';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rating'], 'default', 'value' => null],
            [['rating', 'user_id', 'course_id'], 'integer'],
            [['text'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rating' => 'Rating',
            'text' => 'Text',
        ];
    }
}
