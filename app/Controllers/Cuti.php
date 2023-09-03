<?php

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Session\SessionInterface;

class Cuti extends BaseController
{
    public $session;
    function __construct(){
        $this->cuti = new UserModel();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        if (!$this->session->has('logged_in')) {
            return view('login/login');
        }
        $data['cuti'] = $this->cuti->findAll();
        return view('cuti/data_cuti',$data);
    }
}