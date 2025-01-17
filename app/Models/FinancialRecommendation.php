<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialRecommendation extends Model
{
    /** @use HasFactory<\Database\Factories\FinancialRecommendationFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'goal_id',
        'recommended_value',
        'reason'
     ];

     public function user()
     {
         return $this->belongsTo(User::class);
     }
     public function goal()
     {
         return $this->belongsTo(FinancialGoal::class);
     }


}
