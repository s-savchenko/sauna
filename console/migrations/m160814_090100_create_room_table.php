<?php

use console\migrations\CommonColumns;

/**
 * Handles the creation for table `room`.
 */
class m160814_090100_create_room_table extends CommonColumns
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createCommonColumnsTable('room', [
            'name' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('room');
    }
}
