<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "teacher_lectures".
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $lecture_id
 */
class TeacherLectures extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teacher_lectures';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'lecture_id'], 'default', 'value' => null],
            [['user_id', 'lecture_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'lecture_id' => 'Lecture ID',
        ];
    }
}
