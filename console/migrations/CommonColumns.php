<?php

namespace console\migrations;

use yii\db\Migration;

class CommonColumns extends Migration
{
    public function createCommonColumnsTable($name, $columns)
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $columns = array_merge($columns, [
            'id' => $this->primaryKey(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer()
        ]);
        $this->createTable($name, $columns, $tableOptions);
    }
}
