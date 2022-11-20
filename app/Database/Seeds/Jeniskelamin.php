<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Jeniskelamin extends Seeder
{
    public function run()
    {
        $data_alumni = [
            [
                'id_jk'    => '11',
                'jk'  => 'Perempuan'
            ],
            [
                'id_jk'    => '12',
                'jk'  => 'Laki - Laki'
            ]

        ];

        foreach ($data_alumni as $data){
            $this->db->table('jeniskelamin')->insert($data);
        }
    }
}
