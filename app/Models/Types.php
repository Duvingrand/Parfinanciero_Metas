<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    /** @use HasFactory<\Database\Factories\TypesFactory> */
    use HasFactory;

    protected $fillable = [
        'name'
     ];
     public function financialGoals()
     {
         return $this->hasMany(FinancialGoal::class);
     }
     
}
