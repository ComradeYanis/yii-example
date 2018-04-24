<?php

use yii\db\Migration;

/**
 * Handles the creation of table `categorys`.
 */
class m180424_153817_create_categorys_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('categorys', [
            'id' => $this->primaryKey(),
            'name' => $this->string(25)->notNull()->unique(),
        ]);

        $this->insert('categorys', [
            'name' => 'Food',
        ]);

        $this->insert('categorys', [
            'name' => 'Sport',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('categorys');
    }
}
