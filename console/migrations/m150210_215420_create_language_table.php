<?php

use yii\db\Schema;
use yii\db\Migration;

class m150210_215420_create_language_table extends Migration
{
    public function up()
    {
        $this->createTable("{%language}",[
            "id" => "pk",
            "name" => "varchar(64)",
            "regexp_split_sentences" => "varchar(500)",
            "regexp_exceptions_split_sentences" => "varchar(500)",
            "regexp_word_chars" => "varchar(500)",
            "remove_spaces" => "boolean",
            "split_each_char" => "boolean",
            "right_to_left" => "boolean",
            "user_id" => "INT(11) NOT NULL",
            "created_at" => "timestamp",
            "updated_at" => "timestamp",
        ]);
    }

    public function down()
    {
        $this->dropTable("{%language}");
    }
}
