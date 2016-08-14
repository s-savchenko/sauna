<?php
use console\migrations\CommonColumns;

class m160809_054248_create_table_settings extends CommonColumns
{
    public function up()
    {
        $this->createCommonColumnsTable('settings', [
            'key' => $this->string()->notNull(),
            'value' => $this->string()
        ]);
        $this->createIndex('unique_settings_key', 'settings', 'key', true);
    }

    public function down()
    {
        $this->dropTable('settings');
    }
}
