<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function nama(){
        return view('siswa.namasiswa');
    }

    public function alamat(){
        return view('siswa.alamat');
    }
}
