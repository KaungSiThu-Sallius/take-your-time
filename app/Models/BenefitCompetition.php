<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BenefitCompetition extends Model
{
    use HasFactory;
    protected $fillable = [
        'competition_id',
        'benefit'
    ];
}