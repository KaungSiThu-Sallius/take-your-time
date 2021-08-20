<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CriteriaConference extends Model
{
    use HasFactory;
    protected $fillable = [
        'conference_id',
        'criteria'
    ];
}