<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%term}}`.
 */
class m211113_063632_add_created_at_column_updated_at_column_to_term_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%term}}', 'created_at', $this->timestamp());
        $this->addColumn('{{%term}}', 'updated_at', $this->timestamp());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%term}}', 'created_at');
        $this->dropColumn('{{%term}}', 'updated_at');
    }
}
