<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Other extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'title',
        'image',
        'deadline',
        'place',
        'start_date',
        'oraganization_name',
        'details',
        'apply_form_link',
    ];
}