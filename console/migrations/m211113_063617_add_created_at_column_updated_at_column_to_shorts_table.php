<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%shorts}}`.
 */
class m211113_063617_add_created_at_column_updated_at_column_to_shorts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%shorts}}', 'created_at', $this->timestamp());
        $this->addColumn('{{%shorts}}', 'updated_at', $this->timestamp());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%shorts}}', 'created_at');
        $this->dropColumn('{{%shorts}}', 'updated_at');
    }
}
