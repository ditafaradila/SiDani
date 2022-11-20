<?php
 
namespace App\Controllers;
 
use App\Models\Pngmmn;

class Notif extends BaseController
{
    public function index(){
        $pengumumanModel = new Pngmmn();
        $data['alumni'] = $pengumumanModel->findAll();
        return view('alumni/notification', $data);
    }

    public function indexx(){
        $pengumumanModel = new Pngmmn();
        $data['alumni'] = $pengumumanModel->findAll();
        return view('welcome_message', $data);
    }

    public function indexxx(){
        $pengumumanModel = new Pngmmn();
        $data['alumni'] = $pengumumanModel->findAll();
        return view('alumni/notifications', $data);
    }

    public function create(){
		$data = [
			'title' => 'Tambah Pengumuman'
		];

        return view('alumni/tambah_pengumuman', $data);
    }

    public function storeP(){
        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ], 
			'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ],
            'berkas' => [
                'rules' => 'uploaded[berkas]|max_size[berkas,5120]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]

            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $pengumumanModel = new Pngmmn();
        $dataBerkas = $this->request->getFile('berkas');
        $fileName = $dataBerkas->getName();
        $pengumumanModel->insert([
            'berkas' => $fileName,
            'judul' => $this->request->getPost('judul'),
            'keterangan' => $this->request->getPost('keterangan')
        ]);
        $dataBerkas->move('pengumuman', $fileName);
        session()->setFlashdata('success', 'Berkas Berhasil diupload');
        return redirect()->to('notification');
    }

    public function Delete($id_pengumuman)
    {
        $pengumumanModel = new Pngmmn();
        $pengumumanModel->delete($id_pengumuman);

        return redirect()->to('notification');
    }

    function download($id_pengumuman){
        $pengumumanModel = new Pngmmn();
        $alumni = $pengumumanModel->find($id_pengumuman);
        return $this->response->download('pengumuman/'. $alumni->berkas, null);
    }
    
}