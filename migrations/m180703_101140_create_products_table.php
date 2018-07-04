<?php

use yii\db\Migration;

/**
 * Handles the creation of table `products`.
 */
class m180703_101140_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('products', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'price' => $this->integer(),
            'qt' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('products');
    }
}
