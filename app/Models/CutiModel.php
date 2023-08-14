<?php

namespace App\Models;

use CodeIgniter\Model;

class CutiModel extends Model
{
    protected $table = 'cuti';
    protected $primaryKey = 'id_cuti';
    protected $allowedFields = ['nama_cuti', 'nip_cuti','jabatan_cuti','tgl_mulai','tgl_akhir'];

}