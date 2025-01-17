<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\FinancialGoal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFinancialGoalRequest;
use App\Http\Requests\UpdateFinancialGoalRequest;

/**
 * @OA\Info(title="API Documentation", version="1.0.0")
 */

class FinancialGoalController extends Controller
{

        /**
     * Show financial goals
     * Endpoint: GET /api/financial-goals
     */

     /**
     * @OA\Get(
     *     path="/api/financial-goals",
     *     tags={"Financial_Goals"},
     *     summary="Obtener metas financieras",
     *     @OA\Response(response="200", description="Lista de metas financieras")
     * )
     */

     public function index()
     {
         $goals = FinancialGoal::all(); // Obtiene todas las metas financieras
         return response()->json([
            'success' => true,
            'data' => $goals
        ], 200, ['Content-Type' => 'application/json']);

     }

    /**
     * Show a financial goal
     * Endpoint: GET /api/financial-goals/{id}
     */
    public function show($id)
    {
        $goal = FinancialGoal::find($id);

        if (!$goal) {
            return response()->json([
                'success' => false,
                'message' => 'Meta financiera no encontrada.'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $goal
        ], 200);
    }

    /**
     * Store a financial goal
     * Endpoint: POST /api/financial-goals
     */
    public function store(StoreFinancialGoalRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        $goal = FinancialGoal::create($validated);

        return response()->json([
            'success' => true,
            'data' => $goal
        ], 201);
    }

    /**
     * Update a goal
     * Endpoint: PUT /api/financial-goals/{id}
     */
    public function update(UpdateFinancialGoalRequest $request, $id)
    {
        $goal = FinancialGoal::find($id);

        if (!$goal) {
            return response()->json([
                'success' => false,
                'message' => 'Meta financiera no encontrada.'
            ], 404);
        }

        $validated = $request->validated();

        $goal->update($validated);

        return response()->json([
            'success' => true,
            'data' => $goal
        ], 200);
    }

    /**
     * Delete a financial goal
     * Endpoint: DELETE /api/financial-goals/{id}
     */
    public function destroy($id)
    {
        $goal = FinancialGoal::find($id);

        if (!$goal) {
            return response()->json([
                'success' => false,
                'message' => 'Meta financiera no encontrada.'
            ], 404);
        }

        $goal->delete();

        return response()->json([
            'success' => true,
            'message' => 'Meta financiera eliminada con éxito.'
        ], 200);
    }
}
