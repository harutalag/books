<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "author".
 *
 * @property int $id
 * @property string $full_name
 *
 * @property BookHasAuthor[] $bookHasAuthors
 */
class Author extends \yii\db\ActiveRecord
{
    public $book_count;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'author';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name'], 'required'],
            [['full_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'ФИО',
        ];
    }

    /**
     * Gets query for [[BookHasAuthors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookHasAuthors()
    {
        return $this->hasMany(BookHasAuthor::class, ['author_id' => 'id']);
    }


    /**
     * Gets authors list.
     *
     * @return array
     */
    public static function getAuthorsList(){
        return ArrayHelper::map(self::find()->all(), 'id', 'full_name');
    }
}
