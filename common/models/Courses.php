<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "courses".
 *
 * @property int $id
 * @property string|null $main_image
 * @property string|null $details
 * @property int|null $lecture_amount_counter
 * @property string|null $name
 * @property string|null $start_date
 * @property int|null $price
 * @property string|null $theme
 */
class Courses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'courses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_image', 'details'], 'string'],
            [['lecture_amount_counter', 'price'], 'default', 'value' => null],
            [['lecture_amount_counter', 'price'], 'integer'],
            [['start_date'], 'safe'],
            [['name', 'theme'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'main_image' => 'Main Image',
            'details' => 'Details',
            'lecture_amount_counter' => 'Lecture Amount Counter',
            'name' => 'Name',
            'start_date' => 'Start Date',
            'price' => 'Price',
            'theme' => 'Theme',
        ];
    }
}
