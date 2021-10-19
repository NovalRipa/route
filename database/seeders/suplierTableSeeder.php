<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class suplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suplier = [
            ['id_supplier'=>'111', 'nama'=>'Ripa Noval', 'alamat'=>'Gg.H.Sabana', 'kode_post'=>1234, 'kota'=>'Bandung'],
            ['id_supplier'=>'111', 'nama'=>'Rio', 'alamat'=>'Gg.H.Sabana', 'kode_post'=>1234, 'kota'=>'Bandung'],
            ['id_supplier'=>'111', 'nama'=>'Kidam', 'alamat'=>'Gg.H.Sabana', 'kode_post'=>1234, 'kota'=>'Bandung'],
            ['id_supplier'=>'111', 'nama'=>'Silvi', 'alamat'=>'Gg.H.Sabana', 'kode_post'=>1234, 'kota'=>'Bandung'],
            ['id_supplier'=>'111', 'nama'=>'Sila', 'alamat'=>'Gg.H.Sabana', 'kode_post'=>1234, 'kota'=>'Bandung']
            ];
            // masukkan data ke database
            DB::table('suplier')->insert($suplier);
    }
}

