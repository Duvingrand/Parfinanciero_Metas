<?php

use App\Http\Controllers\FinancialGoalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('financial-goals', FinancialGoalController::class);

