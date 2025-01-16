<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinancialRecommendationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear algunas recomendaciones financieras
        $recommendations = [
            [
                'user_id' => 1,
                'goal_id' => 1,
                'recommended_value' => 5000.00,
                'reasons' => 'Ahorro a largo plazo con un valor mensual recomendado para alcanzar el objetivo más rápido.',
            ],
            [
                'user_id' => 1,
                'goal_id' => 2,
                'recommended_value' => 2000.00,
                'reasons' => 'Mejorar el rendimiento en el trabajo mediante cursos y formaciones que impliquen una inversión inicial.',
            ],
        ];

        // Insertar las recomendaciones en la tabla
        DB::table('financial_recommendations')->insert($recommendations);
    }
}