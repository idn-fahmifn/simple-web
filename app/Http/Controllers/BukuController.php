<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(){
        return view ('home');
    }

    public function misal(){
        return "ini halaman buku 2";
    }
}
