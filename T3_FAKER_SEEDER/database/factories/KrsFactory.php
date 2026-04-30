<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dosen;
use Faker\Factory as FakerFactory;
/**
 * @extends Factory<Model>
 */
class KrsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create('id_ID');
        return [
            'npm' => \App\Models\Mahasiswa::inRandomOrder()->first()->npm,
            'kode_matakuliah' => \App\Models\Matakuliah::inRandomOrder()->first()->kode_matakuliah,
        ];
    }
}
