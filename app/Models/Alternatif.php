<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function comparison_question()
    {
        return $this->hasMany(ComparisonQuestion::class);
    }
    
    public function s_vector()
    {
        return $this->hasMany(Svector::class);
    }
    
    public function v_vector()
    {
        return $this->hasMany(VectorV::class);
    }
}
