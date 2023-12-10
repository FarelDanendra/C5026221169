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

	// method untuk insert data ke table harddisk
	public function store(Request $request)
	{
		// insert data ke table harddisk
		DB::table('harddisk')->insert([
            'kodeharddisk' => $request->kodeharddisk,
            'merkharddisk' => $request->merkharddisk,
			'stockharddisk' => $request->stockharddisk,
			'tersedia' => $request->has('is_checked') ? 'Y' : 'N'
		]);
		// alihkan halaman ke halaman harddisk
		return redirect('/harddisk');
	}

    public function edit($id){
        $harddisk = DB::table('harddisk')
                      ->where('kodeharddisk', $id)
                      ->get();
        return view('editharddisk', ['harddisk' => $harddisk]);
    }

    public function update(Request $request){
        DB::table('harddisk')->where('kodeharddisk', $request->id)->update([
            'merkharddisk' => $request->merkharddisk,
            'stockharddisk' => $request->stockharddisk,
            'tersedia' => $request->has('is_checked') ? 'Y' : 'N'
        ]);
        return redirect('/harddisk');
    }

    public function hapus($id){

        DB::table('harddisk')
            ->where('kodeharddisk', $id)
            ->delete();

        return redirect('/harddisk');
    }
}
