<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\KelasModel;

class UserController extends BaseController
{
    public $kelasModel;
    public $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }
    public function index()
    {
        $data = [
            'title' => 'list_user',
            'users' => $this->userModel->getUser(),
        ];
        return view('list_user', $data);
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

    public function create()
    {
        $kelas = $this->kelasModel->getKelas();
        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    public function store()
    {
        // dd($this->request->getVar());
        if (!$this->validate($this->userModel->getValidationRules())) {
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $this->userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm')
        ]);

        // redirect untuk mengirimkan data 
        return redirect()->to(base_url('/user'));

        // $data = [
        //     'title' => 'profile',
        //     'nama' => $this->request->getVar('nama'),
        //     'kelas' => $this->request->getVar('kelas'),
        //     'npm' => $this->request->getVar('npm')
        // ];
        // return view('profile', $data);
    }
}
