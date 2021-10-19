<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class pesananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan = [
            ['nama_pelangan'=>'Ripa Noval', 'nama_barang'=>'Oppo Neo 5', 'qyt'=>1, 'tgl_pesan'=>'2003-12-12'],
            ['nama_pelangan'=>'Rio', 'nama_barang'=>'Redmi Note 9', 'qyt'=>2, 'tgl_pesan'=>'2003-12-12'],
            ['nama_pelangan'=>'Kidam', 'nama_barang'=>'Redmi Note 8', 'qyt'=>3, 'tgl_pesan'=>'2003-12-12'],
            ['nama_pelangan'=>'Rio', 'nama_barang'=>'Redmi Note 10', 'qyt'=>4, 'tgl_pesan'=>'2003-12-12'],
            ['nama_pelangan'=>'Kidam', 'nama_barang'=>'Redmi Note 8 Pro', 'qyt'=>5, 'tgl_pesan'=>'2003-12-12']
            ];
            // masukkan data ke database
            DB::table('pesanan')->insert($pesanan);
    }
}
