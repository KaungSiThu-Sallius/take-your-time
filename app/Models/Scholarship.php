<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'type',
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