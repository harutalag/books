<?php

use yii\db\Migration;

/**
 * Class m240229_195149_insert_data
 */
class m240229_195149_insert_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("insert  into `author`(`id`,`full_name`) values (1,'William Shakespeare'),(2,'Agatha Christie'),(3,'Enid Blyton'),(4,'J. K. Rowling');");
        $this->execute("insert  into `book`(`id`,`name`,`date`,`isbn`,`description`) values (1,'book 1','2024-02-05','978-5-04-090530-0','some text'),(2,'book 2','2024-01-31','978-5-04-090530-0','description about book'),(3,'book 3','2023-12-12','978-5-04-090530-0',''),(4,'book 4','2024-02-06','978-5-04-090530-0',''),(5,'book 5','2024-02-20','978-5-04-090530-0','');");
        $this->execute("insert  into `book_has_author`(`id`,`book_id`,`author_id`) values (1,1,1),(2,1,2),(3,2,1),(4,3,2),(5,4,3),(6,5,1);");
        $this->execute("insert  into `file`(`id`,`class`,`field`,`object_id`,`title`,`filename`,`content_type`,`type`,`video_status`,`ordering`,`created`,`user_id`,`size`,`hash`,`alt`) values (1,'app\\models\\Book','photo',1,'download (4).jpeg','/48/22/706b14ac62387893595a1c03c46c626d.jpeg','image/jpeg',1,NULL,0,1709235805,1,5566,'faf16b7e9e56ceac0abc9b1dcec04849',NULL),(2,'app\\models\\Book','photo',2,'download (2).jpeg','/21/90/642a838861689a210f7c4ce9a9d44c6c.jpeg','image/jpeg',1,NULL,0,1709235850,1,5309,'a2721c9b0cbd7fe263b0bf8800e75a79',NULL),(3,'app\\models\\Book','photo',3,'download (1).jpeg','/41/86/1edce4e14bbd8035799a11b96679aef3.jpeg','image/jpeg',1,NULL,0,1709235900,1,9621,'f977a0ffc59b18922a0edbf97ce8de31',NULL),(4,'app\\models\\Book','photo',4,'download (3).jpeg','/68/74/8fc815443772b3e1241a2a2d2a2ac0ff.jpeg','image/jpeg',1,NULL,0,1709235927,1,9579,'b2d6b3187ea3d5ca8459ea7be3315710',NULL),(5,'app\\models\\Book','photo',5,'png-transparent-pink-cross-stroke-ink-brush-pen-red-ink-brush-ink-leave-the-material-text.png','/43/73/8d44816ffb70394430842b1bc7b20170.png','image/png',1,NULL,0,1709236226,1,41346,'ebe0f400d108c56d59f0513ef57956c6',NULL);");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240229_195149_insert_data cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240229_195149_insert_data cannot be reverted.\n";

        return false;
    }
    */
}
