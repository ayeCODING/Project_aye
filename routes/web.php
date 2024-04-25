<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {

    $nama = "Salman";
    $jk = "Laki-laki";
    $pendidikanT = "SMK";
    $pekerjaan = "Siswa";
    $alamat = "Cangkuang";


    return view('data_diri', compact('nama','jk','pendidikanT','pekerjaan','alamat'));
});

Route::get('/wani', function () {

    $nama = "Lionel Andres Messi";
    $jk = "Laki-laki";
    $clubT = "Inter Miami";
    $pekerjaan = "Pesepak bola";
    $julukan = "Greatest Off All Time in the world";


    return view('biodataGOAT', compact('nama','jk','clubT','pekerjaan','julukan'));
});

Route::get('/about2/{nama}/{jk}/{pt}/{pekerjaan}/{alamat}', function (Request $request, $nama, $jk, $pt, $pekerjaan, $alamat) {

    $nama2 = $nama;
    $jk2 = $jk;
    $pt2 = $pt;
    $pekerjaan2 = $pekerjaan;
    $alamat2 = $alamat;
    return view('biodata', compact('nama2','jk2','pt2','pekerjaan2','wszalamat2'));
});

