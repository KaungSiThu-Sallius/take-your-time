<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grant extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'level',
        'title',
        'image',
        'start_application_date',
        'deadline',
        'funding',
        'country',
        'given_by',
        'details',
        'other_information',
        'official_website',
        'apply_form_link',
    ];

    public function criteria()
    {
        return $this->hasMany(CriteriaGrant::class);
    }

    public function benefit()
    {
        return $this->hasMany(BenefitGrant::class);
    }

    public function process()
    {
        return $this->hasMany(ProcessGrant::class);
    }
}