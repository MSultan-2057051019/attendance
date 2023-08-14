<?php

namespace App\Controllers;
use App\Models\CutiModel;

class Cuti extends BaseController
{
    function __construct(){
        $this->cuti = new CutiModel();
    }

    public function index()
    {
        $data['cuti'] = $this->cuti->findAll();
        return view('cuti/data_cuti',$data);
    }
}