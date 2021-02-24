<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Session;
use App\buku;
use Illuminate\Contracts\Encryption\DecryptException;
class BukuController extends Controller
{

    public function daftar(){ //daftar buku
        $data = Buku::get();
        return view('buku.daftar', compact('data'));
    }
    public function form(){
        return view('buku.tambah');
     }

     public function tambah(Request $request){
         $this->validate($request, [
       'buku'=>'required|regex:/^[a-zA-Z ]{3,50}$/',
         ]);
        Buku::create([
         'buku' => $request->buku,
         ]);
         return redirect()->route('name.daftar.buku');
     }


}