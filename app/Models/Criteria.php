<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function criterion_weight()
    {
        return $this->hasMany(CriterionWeight::class);
    }
    
    public function relative_weight()
    {
        return $this->hasMany(RelativeWeight::class);
    }
    
    public function comparison_question()
    {
        return $this->hasMany(ComparisonQuestion::class);
    }
}
