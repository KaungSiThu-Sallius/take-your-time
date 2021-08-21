<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'type',
        'image',
        'course_name',
        'deadline',
        'timetable',
        'price',
        'start_date',
        'taught_by',
        'details',
        'course_duration',
        'place',
        'apply_form_link',
    ];
}