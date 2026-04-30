<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Dosen::factory(10)->create();

        \App\Models\Mahasiswa::factory(10)->create();

        \App\Models\Matakuliah::factory(10)->create();

        \App\Models\Jadwal::factory(10)->create();

        \App\Models\Krs::factory(10)->create();
    }
}
