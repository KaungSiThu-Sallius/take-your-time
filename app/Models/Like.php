<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id',
        'type',
        'total_count'
    ];
    public function post()
    {
        return $this->belongsTo(AllPost::class, 'post_id');
    }
}