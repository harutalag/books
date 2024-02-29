<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%book_has_author}}`.
 */
class m240229_125300_create_book_has_author_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%book_has_author}}', [
            'id' => $this->primaryKey(),
            'book_id' => $this->integer(),
            'author_id' => $this->integer()
        ]);

        $this->createIndex('idx_book_has_author_book_id', '{{%book_has_author}}', 'book_id');

        $this->addForeignKey(
            'fk_book_has_author_book_id',
            '{{%book_has_author}}',
            'book_id',
            '{{%book}}',
            'id',
            'CASCADE'
        );

        $this->createIndex('idx_book_has_author_author_id', '{{%book_has_author}}', 'author_id');

        $this->addForeignKey(
            'fk_book_has_author_author_id',
            '{{%book_has_author}}',
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
        $this->dropForeignKey('fk_book_has_author_book_id', '{{%book_has_author}}');
        $this->dropIndex('idx_book_has_author_book_id', '{{%book_has_author}}');

        $this->dropForeignKey('fk_book_has_author_author_id', '{{%book_has_author}}');
        $this->dropIndex('idx_book_has_author_author_id', '{{%book_has_author}}');

        $this->dropTable('{{%book_has_author}}');
    }
}
