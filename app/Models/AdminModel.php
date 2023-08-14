<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'login';
    protected $allowedFields = ['id_user', 'password'];

    function getUserLogin($nip)
    {
        $builder = $this->db->table('login');
        $builder->join('user', 'user.id_user = login.id_user');
        $builder->where('user.nip_user', $nip);
        $query = $builder->get();
        return $query->getRow();
    }

    function getUserJabatan($id_user)
    {
        $builder = $this->db->table('user');
        $builder->select('jabatan_user');
        $builder->where('id_user', $id_user);
        $query = $builder->get();
        return $query->getRow()->jabatan_user;
    }

    function getUserNama($id_user)
    {
        $builder = $this->db->table('user');
        $builder->select('nama_user');
        $builder->where('id_user', $id_user);
        $query = $builder->get();
        return $query->getRow()->nama_user;
    }
}