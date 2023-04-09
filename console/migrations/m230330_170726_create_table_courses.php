<?php

use yii\db\Migration;

/**
 * Class m230330_170726_create_table_courses
 */
class m230330_170726_create_table_courses extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%courses}}', [
            'id' => $this->primaryKey(),
            'main_image' => $this->text(),
            'details' => $this->text(),
            'lecture_amount_counter' => $this->integer(),
            'name' => $this->string(),
            'start_date' => $this->dateTime(),
            'price' => $this->integer(),
            'theme' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%courses}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230330_170726_create_table_courses cannot be reverted.\n";

        return false;
    }
    */
}
