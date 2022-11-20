<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Prodi extends Seeder
{
    public function run()
    {
        $data_alumni = [
            [
                'id_prodi'    => '1',
                'program_study'  => 'S1 Ilmu Komputer'
            ],
            [
                'id_prodi'    => '2',
                'program_study'  => 'D3 Manajemen Informatika'
            ]
        ];

        foreach ($data_alumni as $data){
            $this->db->table('prodi')->insert($data);
        }
    }
}
