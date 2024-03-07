<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    public function index(){
        $siswa = siswa::orderBy('nama','asc')->get();
        return view('pages.admin.siswa.index', ['siswa' => $siswa]);
    }

    public function create(){
        return view('pages.admin.siswa.create');
    }
}
