<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CriteriaScholarship extends Model
{
    use HasFactory;
    protected $fillable = [
        'scholarship_id',
        'criteria'
    ];
}