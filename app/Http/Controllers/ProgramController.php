<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir() {
        return view('coba.program.karir');
    }

    public function magang() {
        return view('coba.program.magang');
    }

    public function kunjungan_industri() {
        return view('coba.program.kunjunganIndustri');
    }
}
