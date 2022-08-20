<?php

namespace App\Controllers;

class IsiPengajuan extends BaseController
{
    public function index()
    {
    
        $builder = $db->table('pengajuan');
        $query   = $builder->get()->getResult();
        $data['pengajuan'] =$query;
        return view('pengajuan/get', $data);
        
    }
}
