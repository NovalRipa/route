<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class barangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            ['nama'=>'Ripa Noval', 'varisan'=>'Oppo Neo 5', 'harga_beli'=>2000, 'harga_jual'=>1000000],
            ['nama'=>'Rio', 'varisan'=>'Redmi Note 9', 'harga_beli'=>2000, 'harga_jual'=>1000000],
            ['nama'=>'kidam', 'varisan'=>'Redmi Note 8', 'harga_beli'=>2000, 'harga_jual'=>1000000],
            ['nama'=>'Silvi', 'varisan'=>'Redmi Note 10', 'harga_beli'=>2000, 'harga_jual'=>1000000],
            ['nama'=>'Sila', 'varisan'=>'Redmi Note 8 Pro', 'harga_beli'=>2000, 'harga_jual'=>1000000]
            ];
            // masukkan data ke database
            DB::table('barang')->insert($barang);
    }
}
