<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%inquiry}}`.
 */
class m230308_113650_add_status_column_integration_status_column_to_inquiry_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%inquiry}}', 'status', $this->integer());
        $this->addColumn('{{%inquiry}}', 'integration_status', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%inquiry}}', 'status');
        $this->dropColumn('{{%inquiry}}', 'integration_status');
    }
}
