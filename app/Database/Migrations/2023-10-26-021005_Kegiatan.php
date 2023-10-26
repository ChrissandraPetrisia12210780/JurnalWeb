<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kegiatan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'judul'         => ['type' => 'varchar', 'constraint' => 255],
            'deskripsi'     => ['type' => 'text', 'constraint' => 500],
            'tanggal'       => ['type' => 'date', 'null' => true],
            'waktu_mulai'   => ['type' => 'datetime', 'null' => true],
            'waktu_selesai' => ['type' => 'datetime', 'null' => true],
            'lokasi'        => ['type' => 'varchar', 'constraint' => 500, 'null' => true],
            'visibility'    => ['type' => 'enum', 'constraint' => ['public', 'private'], 'default' => 'public'],
            'id_pengguna'   => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'id_emoticon'   => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'null' => true],
            'id_edit'       => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'null' => true],
            'id_hapus'      => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'null' => true],
            
            
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('id_pengguna', 'pengguna', 'id');
        $this->forge->addForeignKey('id_edit', 'edit', 'id', false, 'CASCADE');
        $this->forge->addForeignKey('id_hapus', 'hapus', 'id', false, 'CASCADE');
        $this->forge->addForeignKey('id_emoticon', 'emoticon', 'id', false, 'CASCADE');
        $this->forge->createTable('kegiatan');
    }

    public function down()
    {
        $this->forge->dropTable('kegiatan');
    }
}
