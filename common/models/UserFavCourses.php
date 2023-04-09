<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_fav_courses".
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $course_id
 */
class UserFavCourses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_fav_courses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'course_id'], 'default', 'value' => null],
            [['user_id', 'course_id'], 'integer'],
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
            'course_id' => 'Course ID',
        ];
    }
}
