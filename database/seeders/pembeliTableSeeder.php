<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class pembeliTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli = [
            ['nama'=>' Ripa Noval', 'jns_kelamin'=>'male', 'alamat'=>'Gg.H.Sabana', 'kode_post'=>111111, 'kota'=>'Bandung', 'tgl_lahir'=>'2003-09-06'],
            ['nama'=>' Rio', 'jns_kelamin'=>'male', 'alamat'=>'Gg.H.Sabana', 'kode_post'=>111111, 'kota'=>'Bandung', 'tgl_lahir'=>'2003-09-06'],
            ['nama'=>' Kidam', 'jns_kelamin'=>'male', 'alamat'=>'Gg.H.Sabana', 'kode_post'=>111111, 'kota'=>'Bandung', 'tgl_lahir'=>'2003-09-06'],
            ['nama'=>' Silvi', 'jns_kelamin'=>'female', 'alamat'=>'Gg.H.Sabana', 'kode_post'=>111111, 'kota'=>'Bandung', 'tgl_lahir'=>'2003-09-06'],
            ['nama'=>' Sila', 'jns_kelamin'=>'female', 'alamat'=>'Gg.H.Sabana', 'kode_post'=>111111, 'kota'=>'Bandung', 'tgl_lahir'=>'2003-09-06']
            ];
            // masukkan data ke database
            DB::table('pembeli')->insert($pembeli);
    }
}

