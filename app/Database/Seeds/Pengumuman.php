<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Pengumuman extends Seeder
{
    public function run()
    {
        $data_alumni = [
            [
                'id_pengumuman'    => '3',
                'judul'  => 'Workshop Wawancara Kerja',
                'keterangan'  => '08 Oktober 2022',
                'berkas' => '001A-Undangan_Sekjur.pdf'
            ]
        ];

        foreach ($data_alumni as $data){
            $this->db->table('pengumuman')->insert($data);
        }
    }
}
