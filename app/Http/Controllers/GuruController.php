<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function nama() {
        return view ('guru.namaguru');
    }

    public function mapel() {
        return view('guru.mapel');
    }
}
