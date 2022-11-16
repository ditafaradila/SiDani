<?php

namespace App\Models;

use CodeIgniter\Model;

class Admin extends Model
{
    protected $table            = 'admin';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id', 'username', 'password', 'last_login'];

    public function get_data($username, $password){
        return $this -> db -> table ('admin')
        ->where(array('username' => $username, 'password' => $password))
        ->get()->getRowArray();
    }

}