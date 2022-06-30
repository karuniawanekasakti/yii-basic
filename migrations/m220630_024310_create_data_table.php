<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%data}}`.
 */
class m220630_024310_create_data_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%data}}', [
            'id_data' => $this->primaryKey(),
            'nama' => $this->string()->notNull(),
            'alamat' => $this->string(100),
            'umur' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%data}}');
    }
}