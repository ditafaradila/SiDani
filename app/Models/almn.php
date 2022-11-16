<?php

namespace App\Models;

use CodeIgniter\Model;

class almn extends Model
{
    protected $table            = 'login_alumni';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id', 'username', 'password'];

    public function get_data($username, $password){
        return $this -> db -> table ('login_alumni')
        ->where(array('username' => $username, 'password' => $password))
        ->get()->getRowArray();
    }
}