<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lectures".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $course_id
 */
class Lectures extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lectures';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['course_id'], 'default', 'value' => null],
            [['course_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'course_id' => 'Course ID',
        ];
    }
}
