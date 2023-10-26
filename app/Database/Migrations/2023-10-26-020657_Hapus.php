<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Hapus extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'           => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'id_kegiatan'  => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'id_pengguna'  => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'waktu_hapus'  => ['type' => 'datetime'],
        ]);
        
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('id_kegiatan', 'kegiatan', 'id');
        $this->forge->addForeignKey('id_pengguna', 'pengguna', 'id', false, 'CASCADE');
        $this->forge->createTable('hapus');
    }

    public function down()
    {
        $this->forge->dropTable('hapus');
    }
}
