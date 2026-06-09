<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BehindScene extends Model
{
    protected $fillable = [
        'title',
        'media',
        'description',
        'is_active',
    ];
}