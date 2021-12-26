<?php

namespace App\Controllers;



class webkomik extends BaseController
{
    public function login()
    {
        return view('halaman/login');
    }
    public function register()
    {
        return view('halaman/register');
    }
    public function listkomik()
    {
        return view('table/listkomik');
    }
    public function beranda()
    {
        return view('berandalogin');
    }
    public function navigasi()
    {
        return view('navbar/navigasi');
    }
    public function namakelompok()
    {
        return view('namakelompok');
    }
    public function listkomik2()
    {
        return view('table/listkomik2');
    }

    public function listkomik3()
    {
        return view('table/listkomik3');
    }
    public function listkomik4()
    {
        return view('table/listkomik4');
    }
    public function listkomik5()
    {
        return view('table/listkomik5');
    }

    public function create()
    {
        $data = [
            'title' => 'New Komik'
        ];
        return view('table/create', $data);
    }

    public function save()
    {
        dd($this->request->getVar());
    }
    public function sidebar()
    {
        return view('navbar/sidebar');
    }
}