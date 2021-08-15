<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'image',
        'course_name',
        'deadline',
        'place',
        'price',
        'start_date',
        'taught_by',
        'details',
        'course_duration',
        'platform',
        'apply_form_link',
    ];
}