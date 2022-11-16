<?php

namespace App\Models;

use CodeIgniter\Model;

class Prodi extends Model
{
    protected $table            = 'prodi';
    protected $primaryKey       = 'id_prodi';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_prodi', 'program_study'];

}