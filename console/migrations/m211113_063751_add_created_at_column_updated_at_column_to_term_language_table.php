<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%term_language}}`.
 */
class m211113_063751_add_created_at_column_updated_at_column_to_term_language_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%term_language}}', 'created_at', $this->timestamp());
        $this->addColumn('{{%term_language}}', 'updated_at', $this->timestamp());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%term_language}}', 'created_at');
        $this->dropColumn('{{%term_language}}', 'updated_at');
    }
}
