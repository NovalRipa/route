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

Route::get('About', function () {
    return '<h1>Hello</h1>'
    . "<br> Selamat datang di webapp saya"
    . "<br> Laravel emang keren";
});

Route::get('profil', function () {
    $nam = "Ucup";
    return "Nama saya <b>$nam</b>";
});

Route::get('post', function () {
    return "Halaman post";
});
// Route parameter
Route::get('post/{halaman}', function ($a) {
    return "Halaman post ke - <b>$a</b>";
});

Route::get('bio/{nama}/{umur}/{alamat}', function ($a,$b,$c) {
    return '<h1>Biodata</h1>'
    . "Nama : $a <br>"
    . "Umur :  $b <br>"
    . "alamat : $c <br>";
});

// Route optional parameter
Route::get('hal/{halaman?}', function ($a = 1) {
    return "Halaman post ke - <b>$a</b>";
});

// Latihan

// buatlah route "pesan" dengan optimal parameter 
// makanan? minuman? cemilan?

// parameter tidak di isi -> anda tidak pesan,silahkan pulang
// makanan -> anda pesan <br> makan :
// makanan & minuman -> makan : .... minuman : ....
// makanan & minuman & cemilan ->
// makan : .... minuman : .... cemilan
// clue menggunakan kondisi (if)

Route::get('pesan/{makanan?}/{minuman?}/{cemilan?}', function ($a = null , $b = null , $c = null) { 
    if ($a == null && $b == null && $c == null) {
        $pesan = "Anda tidak pesan,silahkan pulang";
    }
    if ($a != null){
        $pesan = "Anda Memesan"
        . "<br> Makan : $a";
    }

    if ($a != null && $b != null){
        $pesan = "Anda Memesan"
        . "<br> Makan : $a"
        . "<br> Minum : $b";
    }
    if ($a != null && $b != null && $c != null){
        $pesan = "Anda Memesan"
        . "<br> Makan : $a"
        . "<br> Minum : $b"
        . "<br> Cemilan : $c";
    }


    return"$pesan";
});