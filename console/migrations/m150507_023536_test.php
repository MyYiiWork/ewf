<?php

use yii\db\Schema;
use yii\db\Migration;

class m150507_023536_test extends Migration {
    const TBL_NAME = '{{%test}}';
    /* public function up() {

      }

      public function down() {
      echo "m150507_023536_test cannot be reverted.\n";

      return false;
      } 
    */

    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp() {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
            $this->createTable(self::TBL_NAME, [
            'id' => Schema::TYPE_PK,
            'testname' => Schema::TYPE_STRING . ' NOT NULL',
        ], $tableOptions);
        }
    }

    public function safeDown() {
        $this->dropTable(self::TBL_NAME);
    }

}
