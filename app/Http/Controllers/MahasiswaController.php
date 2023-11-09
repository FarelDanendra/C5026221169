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

    public function biodata(){
    	$nama = "R. Farel Danendra Hendrawan Putra";
    	$alamat = "Surabaya";
        $umur = 18;
    	return view('biodata',['nama' => $nama,'alamat' => $alamat,'umur' => $umur ]);
    }
}



