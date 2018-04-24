<?php

use yii\db\Migration;

/**
 * Handles the creation of table `pages`.
 */
class m180424_153831_create_pages_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('pages', [
            'id' => $this->primaryKey(),
            'id_category' => $this->integer()->notNull(),
            'name' => $this->string(25)->unique()->notNull(),
            'description' => $this->text()->notNull()
        ]);

        $this->insert('pages', [
            'id_category' => '1',
            'name' => 'Apple',
            'description' => 'Apple trees are large if grown from seed. Generally apple cultivars are propagated by grafting onto rootstocks, which control the size of the resulting tree. There are more than 7,500 known cultivars of apples, resulting in a range of desired characteristics. Different cultivars are bred for various tastes and uses, including cooking, eating raw and cider production. Trees and fruit are prone to a number of fungal, bacterial and pest problems, which can be controlled by a number of organic and non-organic means. In 2010, the fruits genome was sequenced as part of research on disease control and selective breeding in apple production.'
        ]);

        $this->insert('pages', [
            'id_category' => '2',
            'name' => 'Ball',
            'description' => 'A ball is a round object (usually spherical but sometimes ovoid)[1] with various uses. It is used in ball games, where the play of the game follows the state of the ball as it is hit, kicked or thrown by players. Balls can also be used for simpler activities, such as catch, marbles and juggling. Balls made from hard-wearing materials are used in engineering applications to provide very low friction bearings, known as ball bearings. Black-powder weapons use stone and metal balls as projectiles.'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('pages');
    }
}
