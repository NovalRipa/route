<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class biodataseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bio = [
            ['name'=>'Ripa Noval', 'gender'=>'male','borndate'=>'2003-09-06','weight'=>18,'height'=>170],
            ['name'=>'Aku Saya', 'gender'=>'female','borndate'=>'2008-09-05','weight'=>18,'height'=>173]
        ];
        DB::table('biodatas')->insert($bio);
    }
}
