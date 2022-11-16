<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Alumni;
use App\Models\Asdos;

class Pages extends BaseController
{
    public function index(){
        return view('landing_page/welcome_message');
    }

    public function view($page = 'home'){
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.html')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view(('pages/' . $page), $data);
    }

    public function alumni(){
        $alumniModel = new Alumni();
        $alumni = $alumniModel -> findAll();
        $data = ['title' => 'Alumni',
        'alumni' => $alumni
    ];
        return view('pages/alumni', $data);
    }

    public function test(){
        dd('test');
    }
}

?>