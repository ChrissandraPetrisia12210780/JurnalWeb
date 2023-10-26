<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Emoticon extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'nama_emoticon' => ['type' => 'varchar', 'constraint' => 50],
        ]);
        
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('emoticon');
    }

    public function down()
    {
        $this->forge->dropTable('emoticon');
    }
}
