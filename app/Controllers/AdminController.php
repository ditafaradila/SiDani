<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Alumni;
use App\Models\JK;
use App\Models\Prodi;

class AdminController extends BaseController
{
    public function index(){
        $alumniModel = new Alumni();
        $data['alumni'] = $alumniModel->getAlumni();
        // $data['alumni'] = $alumniModel->paginate(5);
        // $data['pager'] = $alumniModel->pager;
        return view('pages/alumni', $data);
    }

    public function indexx(){
        $alumniModel = new Alumni();
        $data['alumni'] = $alumniModel->getAlumni();
        // $data['alumni'] = $alumniModel->paginate(5);
        // $data['pager'] = $alumniModel->pager;
        return view('pages/alumnis', $data);
    }

    public function create(){
        $jkModel = new JK();
        $a = $jkModel->findAll();

        $prodiModel = new Prodi();
        $b = $prodiModel->findAll();

        $data = [
            'title' => 'Create Data Alumni',
            'jeniskelamin' => $a,
            'program_study' => $b
        ];
        
        return view('alumni/create', $data);
    }

    public function store(){
        if(!$this->validate([
            'nama' => 'required',
            'angkatan' => 'required',
            'email' => 'required',
            'nomor' => 'required',
            'id_jk' => 'required',
            'tanggallahir' => 'required',
            'alamat' => 'required',
            'tahunlulus' => 'required',
            'id_prodi' => 'required',
            'pekerjaan' => 'required',
            'tempatkerja' => 'required'
        ])){
            return redirect()->to('/create');
        }

        $alumniModel = new Alumni();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'nomor' => $this->request->getPost('nomor'),
            'angkatan' => $this->request->getPost('angkatan'),
            'id_jk' => $this->request->getPost('id_jk'),
            'tanggallahir' => $this->request->getPost('tanggallahir'),
            'alamat' => $this->request->getPost('alamat'),
            'tahunlulus' => $this->request->getPost('tahunlulus'),
            'id_prodi' => $this->request->getPost('id_prodi'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'tempatkerja' => $this->request->getPost('tempatkerja')
        ];

        $alumniModel->save($data);
        return redirect()->to('/alumni');
    }

    public function delete($id)
    {
        $alumniModel = new Alumni();
        $alumniModel->delete($id);

        return redirect()->to('/alumni');
    }

    public function edit($id){
        $alumniModel = new Alumni();
        $alumni = $alumniModel->find($id);

        $jkModel = new JK();
        $a = $jkModel->findAll();

        $prodiModel = new Prodi();
        $b = $prodiModel->findAll();

        $data = [
            'title' => 'Edit Data Alumni',
            'alumni' => $alumni,
            'jeniskelamin' => $a,
            'program_study' => $b
        ];

        return view('alumni/edit', $data);
    }

    public function update($id){
        if(!$this->validate([
            'nama' => 'required',
            'email' => 'required',
            'nomor' => 'required',
            'angkatan' => 'required',
            'id_jk' => 'required',
            'tanggallahir' => 'required',
            'alamat' => 'required',
            'tahunlulus' => 'required',
            'id_prodi' => 'required',
            'pekerjaan' => 'required',
            'tempatkerja' => 'required'
        ])){
            return redirect()->to('/edit/' .$id);
        }

        $alumniModel = new Alumni();
        $data = [
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getPost('email'),
            'nomor' => $this->request->getPost('nomor'),
            'angkatan' => $this->request->getVar('angkatan'),
            'id_jk' => $this->request->getVar('id_jk'),
            'tanggallahir' => $this->request->getVar('tanggallahir'),
            'alamat' => $this->request->getVar('alamat'),
            'tahunlulus' => $this->request->getVar('tahunlulus'),
            'id_prodi' => $this->request->getVar('id_prodi'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'tempatkerja' => $this->request->getVar('tempatkerja')
        ];

        $alumniModel->update($id, $data);
        return redirect()->to('alumni');
    }

    public function cetakkartu($id){
        $alumniModel = new Alumni();
        $alumni = $alumniModel->find($id);

        $prodiModel = new Prodi();
        $b = $prodiModel->findAll();

        $data = [
            'title' => 'Edit Data Alumni',
            'alumni' => $alumni,
            'program_study' => $b
        ];

        return view('alumni/cetak_kartu', $data);
    }
}