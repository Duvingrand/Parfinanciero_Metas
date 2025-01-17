<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialGoal extends Model
{
    /** @use HasFactory<\Database\Factories\FinancialGoalFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'type_id',
        'current_value',
        'target_value',
        'status_id',
        'start_date',
        'end_date',
        'user_id'
     ];
     public function type()
     {
         return $this->belongsTo(Types::class);
     }
     public function status()
     {
         return $this->belongsTo(Statue::class);
     }
     public function user()
     {
         return $this->belongsTo(User::class);
     }

}
