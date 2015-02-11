<?php

use yii\db\Schema;
use yii\db\Migration;

class m150210_235753_create_text extends Migration
{
    public $languageFK = "fk_text_language";
    public $myTable = "{{%text}}";
    public function up()
    {
        $this->createTable($this->myTable,[
            "id" => "pk",
            "title" => "VARCHAR(255)",
            "content" => "text",
            "source_url" => "VARCHAR(767)",
            "language_id" => "INT(11) NOT NULL",
            "created_at" => "timestamp",
            "updated_at" => "timestamp",
        ]);
        $this->addForeignKey($this->languageFK,$this->myTable,
            'language_id',"{{%language}}","id","CASCADE","CASCADE");
    }

    public function down()
    {
        $this->dropForeignKey($this->languageFK,$this->myTable);
        $this->dropTable($this->myTable);
    }
}
