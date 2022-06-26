<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'id','user_name', 'doctor_name', 'created_at','updated_at',
    ];
}
