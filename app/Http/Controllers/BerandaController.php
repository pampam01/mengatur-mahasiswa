<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(){
        $mahasiswa = Mahasiswa::all();
        $kelas = Kelas::all();
        return view("beranda", ["jumlahMahasiswa" => $mahasiswa->count(), "jumlahKelas" => $kelas->count()]);
    }
}
