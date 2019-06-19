<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {	
    	//untuk cek
    	//return 'List siswa';
    	$data_siswa = \App\Siswa::all();
    	//siswa itu nama folder, index nama filenya
    	return view('siswa.index',['data_siswa' => $data_siswa]); 
    }
}