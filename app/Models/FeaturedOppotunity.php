<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturedOppotunity extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'deadline',
        'type',
        'image'
    ];
}