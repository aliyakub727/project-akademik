<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Sekolahan | Home'
        ];
        return view('welcome_message', $data);
    }
}
