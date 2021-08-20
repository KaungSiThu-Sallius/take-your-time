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

    public function criteria()
    {
        return $this->hasMany(CriteriaScholarship::class);
    }

    public function benefit()
    {
        return $this->hasMany(BenefitScholarship::class);
    }

    public function process()
    {
        return $this->hasMany(ProcessScholarship::class);
    }
}