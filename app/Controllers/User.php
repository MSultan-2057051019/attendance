<?php

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Session\SessionInterface;

class User extends BaseController
{
    public $session;
    function __construct(){
        $this->user = new UserModel();
        $this->session = \Config\Services::session();
    }
    
    public function index()
    {
        if (!$this->session->has('logged_in')) {
            return view('login/login');
        }
        if ($this->session->role == 'Security') {
            return redirect()->to('/tamu');
        }
        $data['user'] = $this->user->findAll();
        return view('user/data_user',$data);
    }

    public function create()
    {
        if (!$this->session->has('logged_in')) {
            return view('login/login');
        }
        if ($this->session->role == 'Security') {
            return redirect()->to('/tamu');
        }
        return view('user/create_user');
    }

    public function save()
    {
        $dataPict = $this->request->getFile('pict');
        $nip = $this->request->getPost('nip_user');
        $jabatan = $this->request->getPost('jabatan_user');
        $tglkerja = $this->request->getPost('tgl_kerja');

        if ($dataPict && $dataPict->isValid()) {
            $nama = $this->request->getPost('nama_user');

            $randomName = $dataPict->getRandomName();
            $currentDate = date('YmdHis');
            $pictFileName = $currentDate . '_' . $randomName;

            $data = [
                'nama_user' => $nama,
                'pict' => $pictFileName,
                'nip_user' => $nip,
                'jabatan_user' => $jabatan,
                'tgl_kerja' => $tglkerja
            ];

            $this->user->insert($data);
            $dataPict->move('assets/images', $pictFileName);
            return redirect()->to('/user');
        } else {
            return redirect()->back()->with('error', 'Please select a valid file Foto for upload.');
        }
    }

    public function edit($id_user)
    {
        if (!$this->session->has('logged_in')) {
            return view('login/login');
        }
        if ($this->session->role == 'Security') {
            return redirect()->to('/tamu');
        }
        $data['user'] = $this->user->find($id_user);
        $data['allUsers'] = $this->user->findAll();
        return view('user/edit_user', $data);
    }

    public function update($id_user)
    {
        $nama = $this->request->getPost('nama_user');
        $jabatan = $this->request->getPost('jabatan_user');
        $tglkerja = $this->request->getPost('tgl_kerja');

        $data = [
            'nama_user' => $nama,
            'jabatan_user' => $jabatan,
            'tgl_kerja' => $tglkerja
        ];

        // Lakukan update data pada user dengan id_user yang sesuai
        $this->user->update($id_user, $data);

        return redirect()->to('/user');
    }
}