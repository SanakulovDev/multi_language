<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%short_language}}`.
 */
class m211113_063734_add_created_at_column_updated_at_column_to_short_language_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%short_language}}', 'created_at', $this->timestamp());
        $this->addColumn('{{%short_language}}', 'updated_at', $this->timestamp());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%short_language}}', 'created_at');
        $this->dropColumn('{{%short_language}}', 'updated_at');
    }
}
