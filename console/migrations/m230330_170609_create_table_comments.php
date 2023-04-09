<?php

use yii\db\Migration;

/**
 * Class m230330_170609_create_table_comments
 */
class m230330_170609_create_table_comments extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%comments}}', [
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
        $this->dropTable('{{%comments}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230330_170609_create_table_comments cannot be reverted.\n";

        return false;
    }
    */
}
