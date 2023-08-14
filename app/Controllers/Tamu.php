<?php

namespace App\Controllers;
use App\Models\TamuModel;

class Tamu extends BaseController
{
    function __construct(){
        $this->tamu = new TamuModel();
    }

    public function index()
    {
        $data['tamu'] = $this->tamu->findAll();
        return view('tamu/data_tamu',$data);
    }
    
    public function create()
    {
        return view('tamu/create_tamu');
    }

    public function save()
    {
        $nama = $this->request->getPost('nama_tamu');
        $noktp = $this->request->getPost('noktp_tamu');
        $nohp = $this->request->getPost('nohp_tamu');
        $asal = $this->request->getPost('asal_tamu');
        $tglmasuk = $this->request->getPost('tgl_masuk');

        $data = [
            'nama_tamu'  => $nama,
            'noktp_tamu' => $noktp,
            'nohp_tamu'  => $nohp,
            'asal_tamu'  => $asal,
            'tgl_masuk'  => $tglmasuk
        ];

        $this->tamu->insert($data);

        return redirect()->to('/tamu');
    }

    public function out($id_tamu)
    {
        $tglkeluar = date('Y-m-d'); // Mengambil tanggal hari ini

        $data = [
            'tgl_keluar' => $tglkeluar
        ];

        // Lakukan update data pada tamu dengan id_tamu yang sesuai
        $this->tamu->update($id_tamu, $data);

        return redirect()->to('/tamu');
    }

    //Security

    public function index_security()
    {
        $data['tamu'] = $this->tamu->findAll();
        return view('tamu_security/data_tamu',$data);
    }
    
    public function create_security()
    {
        return view('tamu_security/create_tamu');
    }

    public function save_security()
    {
        $nama = $this->request->getPost('nama_tamu');
        $noktp = $this->request->getPost('noktp_tamu');
        $nohp = $this->request->getPost('nohp_tamu');
        $asal = $this->request->getPost('asal_tamu');
        $tglmasuk = $this->request->getPost('tgl_masuk');

        $data = [
            'nama_tamu'  => $nama,
            'noktp_tamu' => $noktp,
            'nohp_tamu'  => $nohp,
            'asal_tamu'  => $asal,
            'tgl_masuk'  => $tglmasuk
        ];

        $this->tamu->insert($data);

        return redirect()->to('/tamu_security');
    }

    public function out_security($id_tamu)
    {
        $tglkeluar = date('Y-m-d'); // Mengambil tanggal hari ini

        $data = [
            'tgl_keluar' => $tglkeluar
        ];

        // Lakukan update data pada tamu dengan id_tamu yang sesuai
        $this->tamu->update($id_tamu, $data);

        return redirect()->to('/tamu_security');
    }
}