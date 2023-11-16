<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function index(){
        $a = 886124986;
        $b = 68;
        $c = $a * $b;
        return "<h1>Hasil Perkalian = " . $c . "</h1>";
    }

    public function showtime($jam){
        return $jam;
     }

    public function formulir(){

    	return view('formulir');

    }

    public function biodata(){
    	$nama = "R. Farel Danendra Hendrawan Putra";
    	$alamat = "Surabaya";
        $umur = 18;
    	return view('biodata',['nama' => $nama,'alamat' => $alamat,'umur' => $umur ]);
    }

    public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        $ipk = $request->input('ipk');
        return "Nama : ".$nama.", Alamat : ".$alamat . ", IPK : ".$ipk . ", isi asli : " . $request;
    }



}



