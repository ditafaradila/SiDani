<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Jeniskelamin extends Seeder
{
    public function run()
    {
        $data_alumni = [
            [
                'id'    => '11',
                'username'  => 'Perempuan'
            ],
            [
                'id'    => '12',
                'username'  => 'Laki - Laki'
            ]

        ];

        foreach ($data_alumni as $data){
            $this->db->table('jeniskelamin')->insert($data);
        }
    }
}
