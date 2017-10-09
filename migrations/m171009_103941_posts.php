<?php

use yii\db\Migration;

class m171009_103941_posts extends Migration
{
    public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m171009_103941_posts cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $sql = "CREATE TABLE `client_details` (
                `id` int(11) NOT NULL,
                `name` varchar(256) NOT NULL,
                `address` varchar(256) NOT NULL,
                `phone_no` varchar(20) NOT NULL,
                `email` varchar(30) NOT NULL,
                `website_url` varchar(256) NOT NULL,
                `pan_no` varchar(256) NOT NULL,
                `gst_no` varchar(256) NOT NULL
              ) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
        return $this->execute($sql);

    }

    public function down()
    {
        echo "m171009_103941_posts cannot be reverted.\n";

        return false;
    }
    
}
