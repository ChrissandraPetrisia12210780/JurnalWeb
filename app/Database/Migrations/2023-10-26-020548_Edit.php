<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Edit extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'           => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'id_kegiatan'  => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'id_pengguna'  => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'waktu_edit'   => ['type' => 'datetime'],
        ]);
        
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('id_kegiatan', 'kegiatan', 'id');
        $this->forge->addForeignKey('id_pengguna', 'pengguna', 'id');
        $this->forge->createTable('edit');
    }

    public function down()
    {
        $this->forge->dropTable('edit');
    }
}
