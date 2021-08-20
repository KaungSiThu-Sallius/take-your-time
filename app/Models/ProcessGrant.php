<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcessGrant extends Model
{
    use HasFactory;
    protected $fillable = [
        'grant_id',
        'process'
    ];
}