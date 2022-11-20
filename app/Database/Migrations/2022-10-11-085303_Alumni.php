<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Alumni extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'      => 'VARCHAR',
                'constraint' => '50',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'nomor' => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'angkatan' => [
                'type'       => 'INT',
                'constraint' => '4',
            ],
            'id_jk' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'tanggallahir' => [
                'type'       => 'DATE',
            ],
            'alamat' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tahunlulus' => [
                'type'       => 'INT',
                'constraint' => '4',
            ],
            'id_prodi' => [
                'type'       => 'VARCHAR',
                'constraint' => '25',
            ],
            'pekerjaan' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'tempatkerja' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('alumni');
    }

    public function down()
    {
        $this->forge->dropTable('alumni');
    }
}
