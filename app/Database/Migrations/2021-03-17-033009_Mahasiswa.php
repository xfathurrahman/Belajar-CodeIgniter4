<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel mahasiswa
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nim'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '10'
            ],
            'nama'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 40,
            ],
            'alamat'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'jenis_kelamin' => [
                'type'           => 'ENUM',
                'constraint'     => ['pria', 'wanita'],
            ],
            'tanggal_lahir'      => [
                'type'           => 'DATE',
            ],
            'no_telp'      => [
                'type'           => 'VARCHAR',
                'constraint'     => 13,
            ],
        ]);

        // Membuat primary key
        $this->forge->addPrimaryKey('id');
        // Membuat tabel mahasiswa
        $this->forge->createTable('mahasiswa');
    }

    public function down()
    {
        // menghapus tabel mahasiswa
        $this->forge->dropTable('mahasiswa');
    }
}