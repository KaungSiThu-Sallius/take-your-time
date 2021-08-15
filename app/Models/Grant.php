<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grant extends Model
{
    use HasFactory;
    protected $fillable = [
        'level',
        'title',
        'image',
        'deadline',
        'funding',
        'country',
        'given_by',
        'details',
        'official_website',
        'apply_form_link',
    ];
}