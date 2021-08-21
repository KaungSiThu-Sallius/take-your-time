<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'title',
        'image',
        'start_application_date',
        'deadline',
        'funding',
        'place',
        'organized_by',
        'details',
        'other_information',
        'field',
        'official_website',
        'apply_form_link',
    ];


    public function criteria()
    {
        return $this->hasMany(CriteriaConference::class);
    }

    public function benefit()
    {
        return $this->hasMany(BenefitConference::class);
    }

    public function process()
    {
        return $this->hasMany(ProcessConference::class);
    }
}