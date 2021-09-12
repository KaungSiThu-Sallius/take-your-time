<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'title',
        'image',
        'deadline',
        'place',
        'start_date',
        'organization_name',
        'details',
        'other_information',
        'apply_form_link',
    ];


    public function criteria()
    {
        return $this->hasMany(CriteriaCompetition::class);
    }

    public function benefit()
    {
        return $this->hasMany(BenefitCompetition::class);
    }

    public function process()
    {
        return $this->hasMany(ProcessCompetition::class);
    }
}