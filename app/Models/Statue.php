<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statue extends Model
{
    /** @use HasFactory<\Database\Factories\StatueFactory> */
    use HasFactory;


    protected $fillable = [
        'name'
     ];

     public function financialGoals()
     {
         return $this->hasMany(FinancialGoal::class);
     }
     
}
