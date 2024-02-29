<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%subscribe}}`.
 */
class m240229_161642_create_subscribe_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%subscribe}}', [
            'id' => $this->primaryKey(),
            'author_id' => $this->integer(),
            'phone' => $this->string(32)
        ]);

        $this->createIndex('idx_subscribe_author_id', '{{%subscribe}}', 'author_id');

        $this->addForeignKey(
            'fk_subscribe_author_id',
            '{{%subscribe}}',
            'author_id',
            '{{%author}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_subscribe_author_id', '{{%subscribe}}');
        $this->dropIndex('idx_subscribe_author_id', '{{%subscribe}}');

        $this->dropTable('{{%subscribe}}');
    }
}
