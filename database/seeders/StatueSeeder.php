<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear algunos estados de los objetivos financieros
        $statues = [
            ['name' => 'Activo'],
            ['name' => 'Completado'],
            ['name' => 'En progreso'],
            ['name' => 'Cancelado'],
        ];

        // Insertar los estados en la tabla 'statues'
        DB::table('statues')->insert($statues);
    }
}

