<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('kota')->insert([
            // Jawa Barat
            ['nama_kota' => "Bandung", 'provinsi_id' => 1],
            ['nama_kota' => "Bekasi", 'provinsi_id' => 1],
            ['nama_kota' => "Bogor", 'provinsi_id' => 1],
            ['nama_kota' => "Cimahi", 'provinsi_id' => 1],
            ['nama_kota' => "Cirebon", 'provinsi_id' => 1],
            ['nama_kota' => "Depok", 'provinsi_id' => 1],
            ['nama_kota' => "Sukabumi", 'provinsi_id' => 1],
            ['nama_kota' => "Tasikmalaya", 'provinsi_id' => 1],
            ['nama_kota' => "Kabupaten Bandung", 'provinsi_id' => 1],
            ['nama_kota' => "Kabupaten Bandung Barat", 'provinsi_id' => 1],
            ['nama_kota' => "Kabupaten Bekasi", 'provinsi_id' => 1],
            ['nama_kota' => "Kabupaten Bogor", 'provinsi_id' => 1],
            ['nama_kota' => "Kabupaten Cianjur", 'provinsi_id' => 1],
            ['nama_kota' => "Kabupaten Cirebon", 'provinsi_id' => 1],
            ['nama_kota' => "Kabupaten Garut", 'provinsi_id' => 1],
            ['nama_kota' => "Kabupaten Indramayu", 'provinsi_id' => 1],
            ['nama_kota' => "Kabupaten Karawang", 'provinsi_id' => 1],
            ['nama_kota' => "Kabupaten Kuningan", 'provinsi_id' => 1],
            ['nama_kota' => "Kabupaten Majalengka", 'provinsi_id' => 1],
            ['nama_kota' => "Kabupaten Pangandaran", 'provinsi_id' => 1],
            ['nama_kota' => "Kabupaten Purwakarta", 'provinsi_id' => 1],
            ['nama_kota' => "Kabupaten Subang", 'provinsi_id' => 1],
            ['nama_kota' => "Kabupaten Sukabumi", 'provinsi_id' => 1],
            ['nama_kota' => "Kabupaten Sumedang", 'provinsi_id' => 1],
            ['nama_kota' => "Kabupaten Tasikmalaya", 'provinsi_id' => 1],
        
            // Jawa Tengah
            ['nama_kota' => "Semarang", 'provinsi_id' => 2],
            ['nama_kota' => "Surakarta (Solo)", 'provinsi_id' => 2],
            ['nama_kota' => "Magelang", 'provinsi_id' => 2],
            ['nama_kota' => "Pekalongan", 'provinsi_id' => 2],
            ['nama_kota' => "Salatiga", 'provinsi_id' => 2],
            ['nama_kota' => "Tegal", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Banjarnegara", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Banyumas", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Batang", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Blora", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Boyolali", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Brebes", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Cilacap", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Demak", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Grobogan", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Jepara", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Karanganyar", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Kebumen", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Kendal", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Klaten", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Kudus", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Magelang", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Pati", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Pekalongan", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Pemalang", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Purbalingga", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Purworejo", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Rembang", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Semarang", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Sragen", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Sukoharjo", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Tegal", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Temanggung", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Wonogiri", 'provinsi_id' => 2],
            ['nama_kota' => "Kabupaten Wonosobo", 'provinsi_id' => 2],
            // Jawa Timur
            ['nama_kota' => "Surabaya", 'provinsi_id' => 3],
            ['nama_kota' => "Malang", 'provinsi_id' => 3],
            ['nama_kota' => "Kediri", 'provinsi_id' => 3],
            ['nama_kota' => "Blitar", 'provinsi_id' => 3],
            ['nama_kota' => "Madiun", 'provinsi_id' => 3],
            ['nama_kota' => "Probolinggo", 'provinsi_id' => 3],
            ['nama_kota' => "Batu", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Bangkalan", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Banyuwangi", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Blitar", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Bojonegoro", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Bondowoso", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Gresik", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Jember", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Jombang", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Kediri", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Lamongan", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Lumajang", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Madiun", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Magetan", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Malang", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Mojokerto", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Nganjuk", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Ngawi", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Pacitan", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Pamekasan", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Pasuruan", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Ponorogo", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Probolinggo", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Sampang", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Sidoarjo", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Situbondo", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Sumenep", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Trenggalek", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Tuban", 'provinsi_id' => 3],
            ['nama_kota' => "Kabupaten Tulungagung", 'provinsi_id' => 3],
        ]);
        
    }
}
