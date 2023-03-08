<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%inquiry}}`.
 */
class m230308_081044_create_inquiry_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%inquiry}}', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(50),
            'last_name' => $this->string(50),
            'identification_card_number' => $this->string(50),
            'telephone_no' => $this->string(15),
            'email' => $this->string(50),
            'company_name' => $this->string(100),
            'part_to_deal' => $this->text(),
            'created_at' => $this->integer(15),
            'updated_at' => $this->integer(15),
            'created_by' => $this->integer(5),
            'updated_by' => $this->integer(5),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%inquiry}}');
    }
}
