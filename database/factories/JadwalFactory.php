<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dosen;
use Faker\Factory as FakerFactory;

class JadwalFactory extends Factory
{
   
    public function definition(): array
    {
        $faker = FakerFactory::create('id_ID');
        return [
            'kode_matakuliah' => \App\Models\Matakuliah::inRandomOrder()->first()->kode_matakuliah,
            'nidn' => \App\Models\Dosen::inRandomOrder()->first()->nidn,
            'kelas' => $faker->randomElement(['A', 'B']),
            'hari' => $faker->dayOfWeek(),
            'jam' => $faker->time(),
        ];
    }
}
