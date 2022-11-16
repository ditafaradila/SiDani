<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LoginAlumni extends Seeder
{
    public function run()
    {
        $data_alumni = [
            [
                'id'    => '2',
                'username'  => '1234',
                'password'  => 'apaaja21',
            ]
        ];

        foreach ($data_alumni as $data){
            $this->db->table('login_alumni')->insert($data);
        }
    }
}
