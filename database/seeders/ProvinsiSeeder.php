<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('provinsi')->insert([
            ['nama_provinsi' => "Jawa Barat"],
            ['nama_provinsi' => "Jawa Tengah"],
            ['nama_provinsi' => "Jawa Timur"],
        ]);
    
    }
}
