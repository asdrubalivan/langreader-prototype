<?php

use yii\db\Schema;
use yii\db\Migration;

class m150210_234115_create_word extends Migration
{
    public $languageFK = "fk_word_language";
    public $myTable = "{{%word}}";
    public function up()
    {
        $this->createTable($this->myTable,[
            "id" => "pk",
            "word_text" => "VARCHAR(200)",
            "word_translation" => "mediumtext",
            "status" => "TINYINT",
            "is_phrase" => "boolean",
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
