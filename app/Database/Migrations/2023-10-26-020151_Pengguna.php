<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengguna extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'nama'       => ['type' => 'varchar', 'constraint' => 255, 'null' => false],
            'email'      => ['type' => 'varchar', 'constraint' => 150, 'null' => true],
            'nip'        => ['type' => 'varchar', 'constraint' => 30, 'null' => false],
            'password'   => ['type' => 'varchar', 'constraint' => 255, 'null' => false],
            'role'       => ['type' => 'enum', 'constraint' => ['admin', 'pengguna']],
            'sso_token'  => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'id_unit'    => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
        ]);
        
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('id_unit', 'unit', 'id');
        $this->forge->createTable('pengguna');
        
    }

    public function down()
    {
        $this->forge->dropTable('pengguna');
    }
}
