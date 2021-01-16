<?php

use yii\db\Migration;

/**
 * Class m210116_123259_kiralama
 */
class m210116_123259_kiralama extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = file_get_contents(__DIR__ . '/arabamarka.sql');
        $command = Yii::$app->db->createCommand($sql);
        $command->execute();

        // Make sure, we fetch all errors
        while ($command->pdoStatement->nextRowSet()) {}

        $sql = file_get_contents(__DIR__ . '/kiralama.sql');
        $command = Yii::$app->db->createCommand($sql);
        $command->execute();

        // Make sure, we fetch all errors
        while ($command->pdoStatement->nextRowSet()) {}
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210116_123259_kiralama cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210116_123259_kiralama cannot be reverted.\n";

        return false;
    }
    */
}
