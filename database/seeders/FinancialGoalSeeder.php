<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinancialGoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear algunos objetivos financieros
        $goals = [
            [
                'name' => 'Ahorro para la compra de una casa',
                'type_id' => 1, // Asegúrate de que el ID del tipo sea correcto
                'current_value' => 15000.00,
                'target_value' => 100000.00,
                'status_id' => 1, // Asegúrate de que el ID del estado sea correcto
                'start_date' => '2024-01-01',
                'end_date' => '2026-01-01',
                'user_id' => 1, // El ID del usuario que tiene este objetivo
            ],
            [
                'name' => 'Fondo de emergencia',
                'type_id' => 2, // Asegúrate de que el ID del tipo sea correcto
                'current_value' => 5000.00,
                'target_value' => 20000.00,
                'status_id' => 2, // Asegúrate de que el ID del estado sea correcto
                'start_date' => '2024-01-01',
                'end_date' => '2025-12-31',
                'user_id' => 1,// El ID del usuario que tiene este objetivo
            ],
        ];

        // Insertar los objetivos financieros en la tabla
        DB::table('financial_goals')->insert($goals);
    }
}



