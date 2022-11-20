<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LoginAdmin extends Migration
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
            'username' => [
                'type'      => 'VARCHAR',
                'constraint' => '25',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '25',
            ],
            'last_login' => [
                'type'      => 'TIMESTAMP'
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('admin');
    }

    public function down()
    {
        $this->forge->dropTable('admin');
    }
}
