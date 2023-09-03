<?php

namespace App\Models;

use CodeIgniter\Model;

class TamuModel extends Model
{
    protected $table = 'tamu';
    protected $primaryKey = 'id_tamu';
    protected $allowedFields = ['nama_tamu', 'pict', 'noktp_tamu','nohp_tamu','asal_tamu','tgl_masuk','tgl_keluar'];
}