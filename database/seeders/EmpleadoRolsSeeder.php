<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadoRolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleado_rols')->insert([
            [
                'empleado_id' => 1,
                'rol_id' => 2,
            ],
            [
                'empleado_id' => 2,
                'rol_id' => 3,
            ],
            [
                'empleado_id' => 3,
                'rol_id' => 1,
            ],
        ]);
    }
}
