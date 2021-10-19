<?php

namespace App\Http\Controllers;
use App\Models\biodata;
use App\Models\barang;
use App\Models\pembeli;
use App\Models\pembelian;
use App\Models\pesanan;
use App\Models\suplier;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function latihan()
    {
        $result = "Latihan controller";
        return view('latihan', compact('result'));
    }

    public function biodatasaya()
    {
        $nama = "Nama : Ripa Noval";
        $kelas = "Kelas : XII RPL 2";
        $sekolah = "Sekolah : SMKASSALAM";
        $alamat = "Alamat : Gg.H.Sabana";
        $no = "No Telp : 089524771684";
        return view('biodatasaya', compact('nama','kelas','sekolah','alamat','no'));
    }

    public function bio()
    {
        // mengambil semua data dari model biodata
        $bio = biodata::all();
        return view('biodata', compact('bio'));
    }

    public function barang($id)
    {
        // mengambil semua data dari model biodata
        $barang = barang::findOrFail($id);
        return view('barang', compact('barang'));
    }

    public function pesanan($id)
    {
        // mengambil semua data dari model biodata
        $pesanan = pesanan::findOrFail($id);
        return view('pesanan', compact('pesanan'));
    }

    public function pembelian($id)
    {
        // mengambil semua data dari model biodata
        $pembelian = pembelian::findOrFail($id);
        return view('pembelian', compact('pembelian'));
    }

    public function pembeli($id)
    {
        // mengambil semua data dari model biodata
        $pembeli = pembeli::findOrFail($id);
        return view('pembeli', compact('pembeli'));
    }

    public function suplier($id)
    {
        // mengambil semua data dari model biodata
        $suplier = suplier::findOrFail($id);
        return view('suplier', compact('suplier'));
    }
}