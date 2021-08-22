<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'type',
        'title',
        'image',
        'deadline',
        'place',
        'salary',
        'start_date',
        'organization_name',
        'other_information',
        'details',
        'job_duration',
        'apply_form_link',
    ];

    public function criteria()
    {
        return $this->hasMany(CriteriaJob::class);
    }

    public function benefit()
    {
        return $this->hasMany(BenefitJob::class);
    }

    public function document()
    {
        return $this->hasMany(DocumentJob::class);
    }
}