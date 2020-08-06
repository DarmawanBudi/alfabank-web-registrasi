<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionCookieController extends Controller
{
    public function index(Request $request)
    {
        //menbuat session
        //session terdiri dari key dan value

        //cara 1 menggunakan global helper
        //membuat session
        session(['username'=>'ajisyahroni14']);
        

        //digunakan untuk memverikan default value
        session('username','xtxz');

        //menampilkan nilai session
        $nilai = session('username');

        //cara 2 menggunakan request
        // $username = $request->session('username','agus2112');
        // dd($username);
    }
}
