<?php

namespace App\Controllers;

use App\Models\AdminModel;
use CodeIgniter\Session\SessionInterface;

class Admin extends BaseController
{
    protected $admin;
    public $session;

    public function __construct()
    {
        $this->admin = new AdminModel();
        $this->session = \Config\Services::session();
    }

    public function login()
    {
        if (!$this->session->has('logged_in')) {
            return view('login/login');
        }
        return redirect()->to('/user');
    }

    public function auth()
    {
        $nip = $this->request->getVar('nip_user');
        $password = $this->request->getVar('password');
        $data = $this->admin->getUserLogin($nip);

        if ($data) {
            if ($password == $data->password) {
                $id_user = $data->id_user;
                $nama_user = $this->admin->getUserNama($id_user); // Ambil nama_user dari database
                $jabatan = $this->admin->getUserJabatan($id_user);

                $ses_data = [
                    'ses_email' => $data->nip_user,
                    'logged_in' => true,
                    'nama_user' => $nama_user,
                    'role' => $jabatan,
                ];
                
                if ($jabatan == 'Admin') {
                    $this->session->set($ses_data);
                    return redirect()->to(base_url('/user'));
                } else if ($jabatan == 'Security') {
                    $this->session->set($ses_data);
                    return redirect()->to(base_url('/tamu'));
                } else {
                    return redirect()->to('/')->with('error', 'Jabatan tidak valid');
                }
            } else {
                return redirect()->to('/')->with('error', 'Password salah');
            }
        } else {
            return redirect()->to('/')->with('error', 'Username tidak ditemukan');
        }
    }

    public function logout()
    {
        $this->session->remove('logged_in');
        $this->session->destroy();
        return redirect()->to('/');
    }
}