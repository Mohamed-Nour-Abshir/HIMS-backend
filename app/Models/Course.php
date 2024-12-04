<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];

    protected $fillable = [
        'course_name',
        'slug',
        'department',
        'image',
        'description',
        'course_modules',
        'duration',
        'lectures',
        'hours',
        'regular_price',
        'discount_price',
        'status',
    ];
}
