<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Other extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'type',
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
        return $this->hasMany(CriteriaOther::class);
    }

    public function benefit()
    {
        return $this->hasMany(BenefitOther::class);
    }

    public function process()
    {
        return $this->hasMany(ProcessOther::class);
    }
}