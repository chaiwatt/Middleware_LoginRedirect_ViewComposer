<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        // 1=superadmin, 2=admin, 3=user
        $this->middleware('role:1,2');
    }

    public function index()
    {
        return view('home');
    }
    public function superadmin()
    {
        return view('superadmin');
    }
    public function admin()
    {
        return view('admin');
    }
    public function user()
    {
        return view('user');
    }
}
