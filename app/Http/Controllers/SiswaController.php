<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SiswaController extends Controller
{
    public function index()
    {	
    	//untuk cek
    	
    	$data_siswa = \App\Siswa::all();
    	//siswa itu nama folder, index nama filenya
    	return view('siswa.index',['data_siswa' => $data_siswa]); 
    }

     public function create(Request $request) 
    {	
    	\App\Siswa::create($request->all());
    	return redirect('/siswa')->with('sukses','Data berhasil diinput');//agar setelah submit langsung munculin tabel data siswanya dan muncul notif setelah diinput
    }


    public function edit($id)
    {
    	$siswa = \App\Siswa::find($id);
    	//dd($siswa);
    	return view('siswa/edit',[ 'siswa' => $siswa ]);
    }

    public function update(Request $request,$id) //tambah request supaya dpt menangkap data dari form
    {
    	$siswa = \App\Siswa::find($id);
    	$siswa->update($request->all());
    	return redirect('/siswa')->with('sukses','Data Berhasil di Update');
    }



}