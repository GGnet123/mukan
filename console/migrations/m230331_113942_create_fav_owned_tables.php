<?php

use yii\db\Migration;

/**
 * Class m230331_113942_create_fav_owned_tables
 */
class m230331_113942_create_fav_owned_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_fav_courses}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'course_id' => $this->integer(),
        ]);

        $this->createTable('{{%user_owned_courses}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'course_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user_fav_courses}}');
        $this->dropTable('{{%user_owned_courses}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230331_113942_create_fav_owned_tables cannot be reverted.\n";

        return false;
    }
    */
}
