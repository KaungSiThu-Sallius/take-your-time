<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Undergraduate extends Model
{
    use HasFactory;
    protected $fillable = [
        'scholarship_id',
        'slug',
        'type',
        'title',
        'image',
        'start_application_date',
        'deadline',
        'funding',
        'country',
        'given_by',
        'details',
        'official_website',
        'apply_form_link',
        'other_information'
    ];
}