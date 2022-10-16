<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%trend}}`.
 */
class m221015_142801_create_trend_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('trend', [
            'id' => $this->primaryKey()->unique(),
            'facility_id' => $this->integer()->notNull(),
            'indication_id' => $this->integer()->notNull(),
            'time' => $this->dateTime()->notNull(),
            'value' => $this->decimal(12,4),
        ]);

        $this->createIndex(
            'idx-trend-facility_id',
            'trend',
            'facility_id'
        );

        $this->addForeignKey(
            'fk-trend-facility_id',
            'trend',
            'facility_id',
            'facility',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-trend-facility_id',
            'trend'
        );

        $this->dropIndex(
            'idx-trend-facility_id',
            'trend'
        );

        $this->dropTable('{{%trend}}');
    }
}
