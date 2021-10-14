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

Route::get('about', function () {
    return view('tentang');
});

Route::get('profil', function () {
    $nama = "Ucup";
    return view('profil', compact('nama'));
});

Route::get('post', function () {
    return "Halaman post";
});
// Route parameter
Route::get('post/{halaman?}', function ($a = 1) {
    return view('post' , ['posting' => $a]);
});

Route::get('book', function () {
    $books = [
        ['id'=>1,'title'=>'Belajar Laravel Itu Mudah'],
        ['id'=>2,'title'=>'Belajar Baca Huruf'],
        ['id'=>3,'title'=>'Belajar Baca Aksara Sunda'],
    ];

    return view('book', compact('books'));
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

// buatlah sebuah route bernama biodata
// didalamnya ada 5 variabel
// nama,umur,alamat,cita2,hobi
// kirim data tsb ke view yang bernama biodata 

Route::get('biodata', function () {
    $nama = "Ripa Noval";
    $umur = 18;
    $alamat = "Gg.H.Sabana";
    $cita = "Bobo";
    $hobi = "main game";
    return view('biodata', compact('nama','umur','alamat','cita','hobi'));
});

Route::get('barang', function () {
    $id_barang = 1100;
    $nama_barang = "indomei";
    $harga = 3000;
    $stok = 10;
    $id_supplier = 1200;
    return view('barang', compact('id_barang','nama_barang','harga','stok','id_supplier'));
});

Route::get('supplier', function () {
    $id_supplier = 1200;
    $nama_supplier = "Ripa Noval";
    $no_telp = "089524771684";
    $alamat = "Gg.H.Sabana";
    return view('supplier', compact('id_supplier','nama_supplier','no_telp','alamat'));
});

Route::get('transaksi', function () {
    $id_transaksi = 42140;
    $id_barang = 1100;
    $id_pembeli = 1;
    $tanggal = "03 Oktober 2101";
    $keterangan = "Pembelian";
    return view('transaksi', compact('id_transaksi','id_barang','id_pembeli','tanggal','keterangan'));
});

Route::get('pembayaran', function () {
    $id_pembayar = 2;
    $tgl_bayar = "24 November 2031";
    $total_bayar = "Rp 120.000.00";
    $id_transaksi = 42140;
    return view('pembayaran', compact('id_pembayar','tgl_bayar','total_bayar','id_transaksi'));
});

Route::get('pembelian', function () {
    $id_pembeli = 1;
    $nama_pembeli = "Ucup";
    $jk = "Laki-Laki";
    $no_telp = "089524771621";
    $alamat = "Gg.H.Sabana RT 03 RW 13";
    return view('pembelian', compact('id_pembeli','nama_pembeli','jk','no_telp','alamat'));
});

Route::get('book', function () {
    $books = [
        ['id'=>1,'title'=>'Belajar Laravel Itu Mudah'],
        ['id'=>2,'title'=>'Belajar Baca Huruf'],
        ['id'=>3,'title'=>'Belajar Baca Aksara Sunda'],
    ];

    return view('book', compact('books'));
});



Route::get('film', function () {
    $bioskop = [
        ['id'=>1,'judul'=>'God Of War','sinopsis'=>'Lorem Ipsum','penulis'=>'XXXX','bahasa'=>'inggris','aktor'=>
        [
            'aktor1'=>'Kratos',
            'aktor2'=>'Zeus',
            'aktor3'=>'Hades'
        ]],
        ['id'=>2,'judul'=>'wiro','sinopsis'=>'Lorem Ipsum','penulis'=>'XXXX','bahasa'=>'inggris','aktor'=>
        [
            'aktor1'=>'Kra',
            'aktor2'=>'Ze',
            'aktor3'=>'Had'
        ]],
        ['id'=>3,'judul'=>'sableng','sinopsis'=>'Lorem Ipsum','penulis'=>'XXXX','bahasa'=>'inggris','aktor'=>
        [
            'aktor1'=>'ripa',
            'aktor2'=>'noval',
            'aktor3'=>'kh'
        ]],
        ['id'=>4,'judul'=>'rion man','sinopsis'=>'Lorem Ipsum','penulis'=>'XXXX','bahasa'=>'inggris','aktor'=>
        [
            'aktor1'=>'tinnny',
            'aktor2'=>'tony',
            'aktor3'=>'Hiron'
        ]],
        ['id'=>5,'judul'=>'spiderman','sinopsis'=>'Lorem Ipsum','penulis'=>'XXXX','bahasa'=>'inggris','aktor'=>
        [
            'aktor1'=>'peter',
            'aktor2'=>'pan',
            'aktor3'=>'Hparker'
        ]],
];

    return view('film', compact('bioskop'));
});


