<?php

namespace App\Controllers;


class Visimisi extends BaseController
{
    
    public function index()
    {
        // $wisata = $this->pariwisataModel->findAll();
        $data = [
            'title' => 'Visi Misi Bumdesa',
        ];


        return view('visimisi/index', $data);
    }
}
