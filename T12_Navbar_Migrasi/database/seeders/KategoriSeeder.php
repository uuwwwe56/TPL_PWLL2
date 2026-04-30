<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class KategoriSeeder extends Seeder
{
    
    public function run(): void
    {
        $kategori = [

            ['nama' => 'Pemrograman',
            'created_at' => now(),
            'updated_at' => now()
            ],
            ['nama' => 'Multimedia',
            'created_at' => now(),
            'updated_at' => now()
            ],
            ['nama' => 'Desainer',
            'created_at' => now(),
            'updated_at' => now()
            ],
        ];
        DB::table('kategori')->insert($kategori);
       
    }
}
