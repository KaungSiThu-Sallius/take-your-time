<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CriteriaGrant extends Model
{
    use HasFactory;
    protected $fillable = [
        'grant_id',
        'criteria'
    ];
}