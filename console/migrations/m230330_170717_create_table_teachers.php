<?php

use yii\db\Migration;

/**
 * Class m230330_170717_create_table_teachers
 */
class m230330_170717_create_table_teachers extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%teacher_lectures}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'lecture_id' => $this->integer()
        ]);

        $this->createTable('{{%teacher_courses}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'course_id' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%teacher_lectures}}');
        $this->dropTable('{{%teacher_courses}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230330_170717_create_table_teachers cannot be reverted.\n";

        return false;
    }
    */
}
