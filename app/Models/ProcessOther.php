<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcessOther extends Model
{
    use HasFactory;
    protected $fillable = [
        'other_id',
        'process'
    ];
}