<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('walcome_message');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function user()
    {
        return view('user');
    }
    public function menu()
    {
        return view('menu');
    }
    public function pesan()
    {
        return view('pesan');
    }
}
