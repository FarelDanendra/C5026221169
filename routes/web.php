<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('linktree', function(){
return view('linktree');
});

Route::get('tugas2', function(){
    return view('tugas2');
    });

Route::get('index', function(){
    return view('index');
    });

Route::get('materi1', function(){
    return view('materi1');
    });

Route::get('materi2', function(){
    return view('materi2');
    });

Route::get('materi3', function(){
    return view('materi3');
    });

Route::get('materi4', function(){
    return view('materi4');
    });

Route::get('materi5', function(){
    return view('materi5');
    });
