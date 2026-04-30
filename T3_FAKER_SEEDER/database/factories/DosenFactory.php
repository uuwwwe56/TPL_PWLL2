<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dosen;
use Faker\Factory as FakerFactory;

class DosenFactory extends Factory
{
    protected $model = Dosen::class;

    public function definition(): array
    {
        $faker = FakerFactory::create('id_ID');

        return [
            'nidn' => $faker->unique()->numerify('##########'),
            'nama' => $this->faker->randomElement([
                'Dr. Budi Santoso, S.Kom., M.Kom.',
                'Siti Aminah, S.Kom., M.Kom.',
                'Andi Pratama, S.T., M.T.',
                'Rina Kurniawati, S.Kom., M.Cs.',
                'Agus Saputra, S.Kom., M.Kom.',
                'Dewi Lestari, S.T., M.T.',
                'Fajar Nugroho, S.Kom., M.Kom.',
                'Lina Marlina, S.Kom., M.Cs.',
                'Rudi Hartono, S.T., M.T.',
                'Hendra Wijaya, S.Kom., M.Kom.'
            ]),
        ];
    }
}
