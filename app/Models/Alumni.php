<?php

namespace App\Models;

use CodeIgniter\Model;

class Alumni extends Model
{
    protected $table            = 'alumni';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama', 'email', 'nomor', 'angkatan',
                                    'id_jk', 'tanggallahir', 'alamat', 'tahunlulus',
                                'id_prodi', 'pekerjaan', 'tempatkerja'];

    public function getAlumni(){
        return $this->db->table('alumni')
        ->join('prodi', 'prodi.id_prodi=alumni.id_prodi')
        ->join('jeniskelamin', 'jeniskelamin.id_jk=alumni.id_jk')
        ->get()->getResultArray();
    }

    public function cetakKartu(){
        return $this->db->table('alumni')
        ->join('prodi', 'prodi.id_prodi=alumni.id_prodi')
        ->join('jeniskelamin', 'jeniskelamin.id_jk=alumni.id_jk')
        ->get()->getResultArray();
    }

    public function get_alumni_list($limit, $start){
        return $this->db->table('alumni', $limit, $start)
        ->join('prodi', 'prodi.id_prodi=alumni.id_prodi')
        ->join('jeniskelamin', 'jeniskelamin.id_jk=alumni.id_jk')
        ->get()->getResultArray();
    }

    public function search($keyword){
        // $builder = $this->table('alumni');
        // $builder->like('nama', $keyword);
        // return $builder;

        return $this->table('alumni')
        ->like('nama', $keyword);
    }

}