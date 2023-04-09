<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%review}}`.
 */
class m230330_142254_create_review_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%reviews}}', [
            'id' => $this->primaryKey(),
            'rating' => $this->integer(),
            'text' => $this->text(),
            'user_id' => $this->integer(),
            'course_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%reviews}}');
    }
}
