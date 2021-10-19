<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(barangTableSeeder::class);
        $this->call(pembelianTableSeeder::class);
        $this->call(pembeliTableSeeder::class);
        $this->call(pesananTableSeeder::class);
        $this->call(suplierTableSeeder::class);
    }
}
