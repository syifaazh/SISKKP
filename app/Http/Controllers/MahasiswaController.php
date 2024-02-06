<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function ajukan()
    {
        return view('mahasiswa.ajukan');
    }

    public function berkas()
    {
        return view('mahasiswa.berkas');
    }

    public function laporan()
    {
        return view('mahasiswa.laporan');
    }
    
    public function jadwal()
    {
        return view('mahasiswa.jadwal');
    }

}
