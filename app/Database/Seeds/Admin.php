<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Admin extends Seeder
{
    public function run()
    {
        $data_alumni = [
            [
                'id'    => '11',
                'username'  => 'rosie',
                'password'  => 'rosieposie123',
            ]
        ];

        foreach ($data_alumni as $data){
            $this->db->table('admin')->insert($data);
        }
    }
}
