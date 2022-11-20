<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jeniskelamin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_jk' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_jk' => [
                'type'      => 'VARCHAR',
                'constraint' => '25',
            ],
        ]);
        $this->forge->addKey('id_jk', true);
        $this->forge->createTable('jeniskelamin');
    }

    public function down()
    {
        $this->forge->dropTable('jeniskelamin');
    }
}
