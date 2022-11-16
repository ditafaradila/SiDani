<?php
 
namespace App\Controllers;
 
use App\Models\Admin;

class LoginAdmin extends BaseController
{
    public function index()
    {
        return view('login/admin_login');
    }

    public function processs()
    {
        $user_admin = new Admin();

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $cek = $user_admin->get_data($username, $password);

        if (($cek['username'] == $username) && ($cek['password'] == $password))
        {
            session()->set('username', $cek['username']);
            return redirect()->to(base_url('/alumni'));
        } else {
            session()->setFlashdata('gagal', 'Username / Password salah');
            return redirect()->to(base_url('admin_login'));
        }
        }

    function logout()
    {
        //$session = session();
        session()->destroy();
        return redirect()->to(base_url('admin_login'));
    }
}