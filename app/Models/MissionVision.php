<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MissionVision extends Model
{
    protected $table = 'mission_visions';

    protected $fillable = [
        'chairman_message',
        'chairman_image',
        'md_message',
        'md_image',
    ];
}
