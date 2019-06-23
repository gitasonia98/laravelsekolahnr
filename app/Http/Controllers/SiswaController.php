<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SiswaController extends Controller
{
    public function index(Request $request)
    {	
    	//untuk cek
        if($request->has('cari')){
            $data_siswa = \App\Siswa::where('nama_depan','LIKE','%' .$request->cari. '%')->get();
        }
        else
        {
            $data_siswa= \App\Siswa::all();
        }
    	// dd($request)->all();
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
        // dd($request)->all();
    	$siswa = \App\Siswa::find($id);
    	$siswa->update($request->all());

          if ($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $siswa->avatar = $request->file('avatar')->getClientOriginalName();
            $siswa->save();
        }
    	return redirect('/siswa')->with('sukses','Data Berhasil di Update');
    }
    public function delete($id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->delete();
        return redirect('/siswa')->with('sukses','Data Berhasil Di Hapus');
    }
        public function profile($id)
        {
           $siswa = \App\Siswa::find($id);
           return view('\siswa.profile',['siswa' => $siswa]);
        }



}