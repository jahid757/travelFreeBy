<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'company', 'phone', 'gst', 'nature', 'clientcompany', 'facebook', 'twitter', 'linkedin', 'insta'
    ];

    Public function Property(){

        return $this->hasMany('App\Property');

    }

    Public function Lead(){

        return $this->hasMany('App\Lead');

    }
}
