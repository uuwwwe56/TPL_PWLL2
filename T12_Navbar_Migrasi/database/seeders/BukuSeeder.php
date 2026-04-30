<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $judulBuku=[
            "Senja di Ujung Kota",
            "Hujan yang Tak Pernah Pergi",
            "Rahasia di Balik Pintu Tua",
            "Langkah Kecil Menuju Mimpi Besar",
            "Cinta dalam Diam",
            "Jejak Waktu yang Hilang",
            "Peluk Aku di Ujung Rindu",
            "Dunia yang Tak Terlihat",
            "Kisah yang Tertinggal di Stasiun",
            "Bayangan di Balik Cermin",
            "Menembus Batas Ketakutan",
            "Surat untuk Masa Depan",
            "Cahaya di Tengah Kegelapan",
            "Perjalanan Tanpa Peta",
            "Luka yang Mengajarkan Cinta",
        ];
        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'kode_buku' => DB::table('kategori')->inRandomOrder()->value('id'),
                'judul' => $faker->randomElement($judulBuku),
                'penulis' => $faker->name,
                'tahunterbit' => $faker->year(),
                'harga' => $faker->numberBetween(50000, 200000),
                'created_at' => now(),
                'updated_at' => now()

            ];
            DB::table('buku')->insert($data);
        }
    }
}
