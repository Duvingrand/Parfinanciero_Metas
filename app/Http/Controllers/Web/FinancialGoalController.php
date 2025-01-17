<?php

namespace App\Http\Controllers;

use App\Models\FinancialGoal;
use App\Http\Requests\StoreFinancialGoalRequest;
use App\Http\Requests\UpdateFinancialGoalRequest;

class FinancialGoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $financialGoals = FinancialGoal::all();
        return view('financial-goals.index', compact('financialGoals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFinancialGoalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FinancialGoal $financialGoal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FinancialGoal $financialGoal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFinancialGoalRequest $request, FinancialGoal $financialGoal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FinancialGoal $financialGoal)
    {
        //
    }
}
