<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Online_Registering extends Model
{
    protected $table = 'online_registerings';

    protected $fillable = [
        'programme',
        'title',
        'name',
        'full_name',
        'dob',
        'country',
        'nic',
        'mobile',
        'email',
        'telephone',
        'address',
        'description',
    ];
}
