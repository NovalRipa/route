<?php

use App\Http\Controllers\MyController;
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


Route::get('/testmodel', function () {
    $query = App\Models\Post::all();
  return $query;
});

Route::get('/testmodel2', function () {
    $query = App\Models\Post::find(1);
  return $query;
});


Route::get('/testmodel3', function () {
    $query = App\Models\Post::where('title','like','%cepat nikah%')->get();
  return $query;
});

Route::get('/testpost', function (){
    $query = App\Models\Post::all();
    return view('best-post' , compact('query'));

});

Route::get('/hero', function (){
    $query = App\Models\Post::all();
    return view('hero' , compact('query'));

});


// Route view
Route::get('tentang', function () {
    return view('beranda');
});

// Route Conttoller

Route::get('latihan-controller', [MyController::class, 'latihan']);

Route::get('biodata-saya', [MyController::class, 'biodatasaya']);

Route::get('barang/{id}', [MyController::class, 'barang']);

Route::get('pembelian/{id}', [MyController::class, 'pembelian']);

Route::get('pembeli/{id}', [MyController::class, 'pembeli']);

Route::get('pesanan/{id}', [MyController::class, 'pesanan']);

Route::get('suplier/{id}', [MyController::class, 'suplier']);