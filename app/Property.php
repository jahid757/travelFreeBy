<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\file;
use App\Role;
use App\User;

class Property extends Model
{
    //
    protected $fillable = [
        'for','type', 'city', 'apartment', 'locality', 'address', 'bhk', 'bedrooms', 'bathrooms',
    'balconies', 'carpetArea', 'superArea', 'areaUnitc', 'areaUnits','furnishing', 'reservedParking', 'totalFloors', 'propertyOnFloor',
    'availability', 'pessession', 'ageOfConstruction', 'possessionMonth', 'possessionYear', 'reservedParking', 'uuid', 'images', 'owership', 'expectedPrice',
    'tokenMoney', 'description', 'company', 'agent', 'prange',
    ];

    
    Public function file()
    {

        return $this->belongsTo('App\file' );
    }
    
        public function user(){
    
            return $this->belongsTo('App\User');
    
        }
    
        public function Location(){
    
            return $this->belongsTo('App\Location');
    
        }


}
