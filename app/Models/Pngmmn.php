<?php

namespace App\Models;

use CodeIgniter\Model;

class Pngmmn extends Model
{
    protected $table            = 'pengumuman';
    protected $primaryKey       = 'id_pengumuman';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $allowedFields    = ['judul', 'keterangan', 'berkas'];

    public function get_data(){
        return $this->db->table('pengumuman')
        ->where('id_pengumuman')
        ->selectMax('id_pengumuman')
        ->get()->getResultArray();
    }
}