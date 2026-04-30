<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dosen;
use Faker\Factory as FakerFactory;

/**
 * @extends Factory<Model>
 */
class MatakuliahFactory extends Factory
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
            'kode_matakuliah' => 'MK' . $faker->unique()->numerify('######'),
            'nama_matakuliah' => $this->faker->randomElement([
                'Algoritma dan Pemrograman',
                'Struktur Data',
                'Basis Data',
                'Pemrograman Web',
                'Jaringan Komputer',
                'Sistem Operasi',
                'Kecerdasan Buatan',
                'Data Mining',
                'Rekayasa Perangkat Lunak',
                'Pemrograman Mobile',
            ]),
            'sks' => $faker->numberBetween(2, 4),
        ];
    }
}
