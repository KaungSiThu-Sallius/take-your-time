<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcessCompetition extends Model
{
    use HasFactory;
    protected $fillable = [
        'competition_id',
        'process'
    ];
}