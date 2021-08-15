<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OppotunityPlace extends Model
{
    use HasFactory;
    protected $fillable  = [
        'oppotunity',
        'place'
    ];
}