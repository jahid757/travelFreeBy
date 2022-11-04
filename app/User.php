<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\file;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'companyid' , 'password', 'company', 'role_id', 'file', 'mobile', 'companylogo',
        'userid', 'city', 'deal', 'value', 'age', 'gender', 'facebook', 'twitter', 'linkedin', 'insta', 'companyinitials',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    Public function role()
    {

        return $this->belongsTo('App\Role');
    }

    public function isAdmin(){

        if($this->role->name == "Administrator"){

            return true;
        }
        return false;
    }
}
