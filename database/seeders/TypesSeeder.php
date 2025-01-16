<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesSeeder extends Seeder 
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear algunos tipos de objetivos financieros
        $types = [
            ['name' => 'Ahorro'],
            ['name' => 'Inversión'],
            ['name' => 'Fondo de emergencia'],
            ['name' => 'Pago de deuda'],
        ];

        // Insertar los tipos en la tabla 'types'
        DB::table('types')->insert($types);
    }
}

