<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Unit extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'nama_unit'  => ['type' => 'varchar', 'constraint' => 200],
        ]);
        
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('unit');
    }

    public function down()
    {
        $this->forge->dropTable('unit');
    }
}
