<?php

use yii\db\Migration;

/**
 * Class m230330_170546_create_table_lectures
 */
class m230330_170546_create_table_lectures extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%lectures}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'course_id' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%lectures}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230330_170546_create_table_lectures cannot be reverted.\n";

        return false;
    }
    */
}
