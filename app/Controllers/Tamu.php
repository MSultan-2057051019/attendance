<?php

namespace App\Controllers;
use App\Models\TamuModel;
use CodeIgniter\Session\SessionInterface;

class Tamu extends BaseController
{
    public $session;
    function __construct(){
        $this->tamu = new TamuModel();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        if (!$this->session->has('logged_in')) {
            return view('login/login');
        }
        $data['tamu'] = $this->tamu->findAll();
        return view('tamu/data_tamu',$data);
    }
    
    public function create()
    {
        if (!$this->session->has('logged_in')) {
            return view('login/login');
        }
        return view('tamu/create_tamu');
    }

    public function save()
    {
        $dataPict = $this->request->getFile('pict');
        $nip = $this->request->getPost('nip_user');
        $nama = $this->request->getPost('nama_tamu');
        $noktp = $this->request->getPost('noktp_tamu');
        $nohp = $this->request->getPost('nohp_tamu');
        $asal = $this->request->getPost('asal_tamu');
        $tglmasuk = $this->request->getPost('tgl_masuk');

        if ($dataPict && $dataPict->isValid()) {
            $nama = $this->request->getPost('nama_user');

            $randomName = $dataPict->getRandomName();
            $currentDate = date('YmdHis');
            $pictFileName = $currentDate . '_' . $randomName;
        
            $data = [
                'nama_tamu'  => $nama,
                'noktp_tamu' => $noktp,
                'nohp_tamu'  => $nohp,
                'asal_tamu'  => $asal,
                'tgl_masuk'  => $tglmasuk,
                'pict'       => $pictFileName
            ];

            $this->tamu->insert($data);
            $dataPict->move('assets/images', $pictFileName);
            return redirect()->to('/tamu');
        } else {
            return redirect()->back()->with('error', 'Please select a valid file Foto for upload.');
        }
    }

    public function out($id_tamu)
    {
        if (!$this->session->has('logged_in')) {
            return view('login/login');
        }
        $tglkeluar = date('Y-m-d'); // Mengambil tanggal hari ini

        $data = [
            'tgl_keluar' => $tglkeluar
        ];

        // Lakukan update data pada tamu dengan id_tamu yang sesuai
        $this->tamu->update($id_tamu, $data);

        return redirect()->to('/tamu');
    }
}