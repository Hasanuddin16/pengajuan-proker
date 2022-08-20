<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        $data = [
            'title' => 'Home | Catalog Mobil Motor'
        ];
        // echo view('layout/header',$data);
        // echo view('home');
        // echo view('footer');
        return view('pages/index');
    }
}
