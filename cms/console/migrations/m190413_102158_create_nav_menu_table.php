<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%nav_menu}}`.
 */
class m190413_102158_create_nav_menu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%nav_menu}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->unique(),
            'href' => $this->string()->notNull()->unique(),
            'position' => $this->integer()->notNull()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%nav_menu}}');
    }
}
