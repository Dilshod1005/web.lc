<?php

use yii\db\Migration;

/**
 * Class m240815_052857_create_db
 */
class m240815_052857_create_db extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql="CREATE TABLE category (
  id int PRIMARY KEY AUTO_INCREMENT,
  name_uz varchar(255),
  name_ru varchar(255),
  name_en varchar(255)
);

CREATE TABLE child_category (
  id int PRIMARY KEY AUTO_INCREMENT,
  name_uz varchar(255),
  name_ru varchar(255),
  name_en varchar(255),
  category_id int
);

CREATE TABLE sidebar (
  id int PRIMARY KEY AUTO_INCREMENT,
  image varchar(255),
  description_uz varchar(255),
  description_ru varchar(255),
  description_en varchar(255)
);

CREATE TABLE page (
  id int PRIMARY KEY AUTO_INCREMENT,
  title_uz varchar(255),
  title_ru varchar(255),
  title_en varchar(255),
  image varchar(255),
  view int,
  content_uz text,
  comtent_ru text,
  content_en text,
  child_category_id int
);

ALTER TABLE page ADD FOREIGN KEY (child_category_id) REFERENCES child_category (id);

ALTER TABLE child_category ADD FOREIGN KEY (category_id) REFERENCES category (id);";

        $this->execute($sql);
    }


    public function safeDown()
    {
        echo "m240815_052857_create_db cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240815_052857_create_db cannot be reverted.\n";

        return false;
    }
    */
}
