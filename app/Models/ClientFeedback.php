<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientFeedback extends Model
{
    protected $guarded = [];
    protected $table = 'client_feedback';
    protected $fillable=[
        'client_name','client_image','client_designation','client_feedback'
    ];
}
