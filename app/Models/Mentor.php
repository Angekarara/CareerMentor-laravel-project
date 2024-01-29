<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    protected $fillable = [
        'user_id','mentor_name', 'email', 'field', 'location', 'description','image_path',
    ];
}
