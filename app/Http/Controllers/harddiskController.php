<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class harddiskController extends Controller
{
    public function index()
	{

        $harddisk = DB::table('harddisk')->get();

		return view('indexharddisk',['harddisk' => $harddisk]);

	}

    public function tambah()
	{

		// memanggil view tambah
		return view('tambahharddisk');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table harddisk
		DB::table('harddisk')->insert([
            'merkharddisk' => $request->merkharddisk,
			'stockharddisk' => $request->stockharddisk,
			'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/harddisk');
	}
}

