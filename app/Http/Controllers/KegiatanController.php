<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Session;
use App\kegiatan;
use Illuminate\Contracts\Encryption\DecryptException;
class KegiatanController extends Controller
{

    public function uipengguna(){ //daftar buku
        $data = Kegiatan::get();
        return view('kegiatan.UIpengguna', compact('data'));
    }

    public function daftar(){ //daftar buku
        $data = Kegiatan::get();
        return view('kegiatan.daftar', compact('data'));
    }
    public function form(){
        return view('kegiatan.tambah');
     }

     public function tambah(Request $request){
         $this->validate($request, [
       'nama'=>'required|regex:/^[a-zA-Z ]{3,50}$/',
       'deskripsi'=>'required|regex:/^[a-zA-Z ]{3,200}$/',
         ]);
        Kegiatan::create([
         'nama' => $request->nama,
         'deskripsi' => $request->deskripsi,
         ]);
         return redirect()->route('name.daftar.kegiatan');
     }


}