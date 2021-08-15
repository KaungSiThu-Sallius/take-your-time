<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'deadline',
        'funding',
        'place',
        'given_by',
        'details',
        'field',
        'official_website',
        'apply_form_link',
    ];
}