<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('areas')->insert([
            ['nombre' => 'Ingeniería'],
            ['nombre' => 'Analisis y diseño'],
            ['nombre' => 'Desarrollo: Front-End'],
            ['nombre' => 'Desarrollo: Back-End'],
            ['nombre' => 'Desarrollo: Full Stack'],
            ['nombre' => 'Desarrollo: Móvil'],
        ]);
    }
}
