<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComparisonQuestion extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class);
    }
    
    public function criteria()
    {
        return $this->belongsTo(Criteria::class);
    }
}
