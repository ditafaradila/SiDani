<?php

namespace App\Models;

use CodeIgniter\Model;

class JK extends Model
{
    protected $table            = 'jeniskelamin';
    protected $primaryKey       = 'id_jk';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_jk', 'jk'];

}