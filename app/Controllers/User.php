<?php

namespace App\Controllers;
use App\Models\UserModel;

class User extends BaseController
{
    function __construct(){
        $this->user = new UserModel();
    }

    public function index()
    {
        $data['user'] = $this->user->findAll();
        return view('user/data_user',$data);
    }

    public function create()
    {
        return view('user/create_user');
    }

    public function save()
    {
        $nama = $this->request->getPost('nama_user');
        $nip = $this->request->getPost('nip_user');
        $jabatan = $this->request->getPost('jabatan_user');
        $tglkerja = $this->request->getPost('tgl_kerja');

        $data = [
            'nama_user' => $nama,
            'nip_user' => $nip,
            'jabatan_user' => $jabatan,
            'tgl_kerja' => $tglkerja
        ];

        $this->user->insert($data);

        return redirect()->to('/user');
    }

    public function edit($id_user)
    {
        $data['user'] = $this->user->find($id_user);
        $data['allUsers'] = $this->user->findAll();
        return view('user/edit_user', $data);
    }

    public function update($id_user)
    {
        $nama = $this->request->getPost('nama_user');
        $nip = $this->request->getPost('nip_user');
        $jabatan = $this->request->getPost('jabatan_user');
        $tglkerja = $this->request->getPost('tgl_kerja');

        $data = [
            'nama_user' => $nama,
            'nip_user' => $nip,
            'jabatan_user' => $jabatan,
            'tgl_kerja' => $tglkerja
        ];

        // Lakukan update data pada user dengan id_user yang sesuai
        $this->user->update($id_user, $data);

        return redirect()->to('/user');
    }
}