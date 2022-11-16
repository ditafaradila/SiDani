<?php
 
namespace App\Controllers;
 
use App\Models\almn;

class LoginAlumni extends BaseController
{
    public function index()
    {
        return view('login/alumni_login');
    }

    public function proces()
    {
        $login_alumni = new almn();

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $cek = $login_alumni->get_data($username, $password);

        if (($cek['username'] == $username) && ($cek['password'] == $password))
        {
            session()->set('username', $cek['username']);
            return redirect()->to(base_url('/alumnis'));
        } else {
            session()->setFlashdata('gagal', 'Username / Password salah');
            return redirect()->to(base_url('alumni_login'));
        }
        }

        function out()
        {
            //session = session();
            session()->destroy();
            return redirect()->to(base_url('alumni_login'));
        }
}