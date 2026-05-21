<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dosen;
use Faker\Factory as FakerFactory;

/**
 * @extends Factory<Model>
 */
class MahasiswaFactory extends Factory
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
            'npm' => $faker->unique()->numerify('##########'),
            'nidn' => \App\Models\Dosen::inRandomOrder()->first()->nidn,
            'nama' => $faker->name(),
        ];
    }
}
