<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllPost extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'post_id',
        'name',
        'slug',
        'title',
        'deadline',
        'image',
    ];
}