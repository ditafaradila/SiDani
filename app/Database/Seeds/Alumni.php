<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Alumni extends Seeder
{
    public function run()
    {
        $data_alumni = [
            [
                'id'    => '1',
                'nama'  => 'Ahmad Nalpa',
                'email'  => 'aapujicyber@gmail.com',
                'nomor'  => '085269699425',
                'angkatan'  => '2007',
                'jk'  => 'Laki-Laki',
                'tanggallahir'  => '1989-11-11',
                'alamat'  => 'Krui, Pesisir Barat',
                'tahunlulus'  => '2012',
                'prodi'  => 'S1 Ilmu Komputer',
                'pekerjaan'  => 'PNS',
                'tempatkerja'  => 'Dinas Kominfo',
            ]
        ];

        foreach ($data_alumni as $data){
            $this->db->table('alumni')->insert($data);
        }
    }
}
