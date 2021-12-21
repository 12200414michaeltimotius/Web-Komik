<?php

namespace App\Controllers;

class controller1 extends BaseController
{
    public function berandalogin()
    {
        return view('login/berandalogin');
    }
    public function register()
    {
        return view('login/register');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
}
