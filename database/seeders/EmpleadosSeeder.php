<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('empleados')->insert([
            [
                'nombre' => 'Deimar Junior',
                'email' => 'deimarjunior@example.com',
                'sexo'  => 'F',
                'area_id'  => 3,
                'boletin'  => 1,
                'descripcion'  => 'Imgeniero de sistemas',
            ],
            [
                'nombre' => 'Deivid Riascos',
                'email' => 'deividriascos@example.com',
                'sexo'  => 'M',
                'area_id'  => 6,
                'boletin'  => 0,
                'descripcion'  => 'Desarrollador web',
            ],
            [
                'nombre' => 'Marcial Parra',
                'email' => 'marcialparra@example.com',
                'sexo'  => 'F',
                'area_id'  => 5,
                'boletin'  => 1,
                'descripcion'  => 'Desarrollador Full-Satck',
            ],
        ]);
    }
}
