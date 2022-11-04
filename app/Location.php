<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lead;
use App\User;

class Location extends Model
{
    //
    protected $fillable = ['city', 'locality',
    ];
}
