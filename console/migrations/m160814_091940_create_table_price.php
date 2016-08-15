<?php

use console\migrations\CommonColumns;

class m160814_091940_create_table_price extends CommonColumns
{
    public function up()
    {
        $this->createCommonColumnsTable('price', [
            'from' => $this->string()->notNull(),
            'to' => $this->string()->notNull(),
            'day_type' => $this->string()->notNull(),
            'room_id' => $this->integer()->notNull(),
        ]);
        $this->addForeignKey('fk_price_room', 'price', 'room_id', 'room', 'id');
    }

    public function down()
    {
        $this->dropForeignKey('fk_price_room', 'price');
        $this->dropTable('price');
    }
}
