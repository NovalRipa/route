<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class pembelianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian = [
            ['nama_barang'=>'Oppo Neo 5', 'nama_suplier'=>'koko','qyt'=>'1', 'tgl'=>'2003-12-12'],
            [ 'nama_barang'=>'Redmi Note 9', 'nama_suplier'=>'koko', 'qyt'=>'2', 'tgl'=>'2003-12-12'],
            [ 'nama_barang'=>'Redmi Note 8', 'nama_suplier'=>'koko', 'qyt'=>'3', 'tgl'=>'2003-12-12'],
            [ 'nama_barang'=>'Redmi Note 10', 'nama_suplier'=>'koko', 'qyt'=>'4', 'tgl'=>'2003-12-12'],
            [ 'nama_barang'=>'Redmi Note 8 Pro', 'nama_suplier'=>'koko', 'qyt'=>'5', 'tgl'=>'2003-12-12']
            ];
            // masukkan data ke database
            DB::table('pembelian')->insert($pembelian);
    }
}
