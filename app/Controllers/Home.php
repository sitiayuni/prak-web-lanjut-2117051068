<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function profile($nama = "", $kelas = "", $npm = "")
    {
        // kirim data melalui controller
        // $data = [
        //     'nama' => 'Siay',
        //     'kelas' => 'A',
        //     'npm' => '2117051068'
        // ];

        // kirim data melalui parameter router
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm
        ];
        return view('profile', $data);
    }
}
