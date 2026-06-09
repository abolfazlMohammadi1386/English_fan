<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'site_name',
        'about_us',
        'phone',
        'whatsapp',
        'telegram',
        'instagram',
        'address',
    ];
}