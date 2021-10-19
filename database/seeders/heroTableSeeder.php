<?php

namespace Database\Seeders\heroTableSeeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class heroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hero = [
            ['realName'=>'Robert Downey Jr', 'heroName'=>'ironaman', 'power'=>'10000', 'kindofpower'=>'terbang', 'gender'=>'laki-laki', 'height'=>'174', 'weight'=>'180', 'borndate'=>'1932-06-04'],
            ['realName'=>'Kirk Alyn', 'heroName'=>'superman', 'power'=>'10000', 'kindofpower'=>'terbang', 'gender'=>'laki-laki', 'height'=>'170', 'weight'=>'180', 'borndate'=>'1842-05-06'],
            ['realName'=>'Piter Parker', 'heroName'=>'spiderman', 'power'=>'10000', 'kindofpower'=>'merayap di dinding', 'gender'=>'laki-laki', 'height'=>'173', 'weight'=>'180', 'borndate'=>'1931-11-21']
            ['realName'=>'Robert Pattison', 'heroName'=>'batman', 'power'=>'10000', 'kindofpower'=>'terbang', 'gender'=>'laki-laki','height'=>'183', 'weight'=>'180', 'borndate'=>'1945-05-14'],
            ['realName'=>'Ryan Reynold', 'heroName'=>'deadpool', 'power'=>'10000', 'kindofpower'=>'imoprtal', 'gender'=>'laki-laki','height'=>'188', 'weight'=>'180kg', 'borndate'=>'1974-10-14'],
            ['realName'=>'Ryan Reynold', 'heroName'=>'greenlanther', 'power'=>'10000', 'kindofpower'=>'membuat sesuatu', 'gender'=>'laki-laki', 'height'=>'188', 'weight'=>'180', 'borndate'=>'1974-10-21'],
            ['realName'=>'Benedict Cumberbacth', 'heroName'=>'doctorstrange', 'power'=>'10000', 'kindofpower'=>'penyihir', 'gender'=>'laki-laki', 'height'=>'183','weight'=>'180','borndate'=>'1976-06-1'],
            ['realName'=>'Grant Gustin', 'heroName'=>'the flash', 'power'=>'10000', 'kindofpower'=>'lari laju', 'gender'=>'laki-laki','height'=>'170', 'weight'=>'180', 'borndate'=>'1990-01-14'],
            ['realName'=>'Mark Ruffalo', 'heroName'=>'hulk', 'power'=>'10000', 'kindofpower'=>'kuat','gender'=>'laki-laki', 'height'=>'173', 'weight'=>'180', 'borndate'=>'1967-11-21'],
            ['realName'=>'Chris Hemsworth', 'heroName'=>'thor', 'power'=>'10000', 'kindofpower'=>'dewa petir','gender'=>'laki-laki', 'height'=>'190', 'weight'=>'180', 'borndate'=>'1983-07-12']
            ];
            // masukkan data ke database
            DB::table('hero')->insert($hero);
    }
}
