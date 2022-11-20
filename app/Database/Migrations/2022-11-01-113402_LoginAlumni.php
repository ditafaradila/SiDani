<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LoginAlumni extends Migration
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
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('login_alumni');
    }

    public function down()
    {
        $this->forge->dropTable('login_alumni');
    }
}
