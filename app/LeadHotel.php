<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\file;
use App\Role;
use App\User;
use App\Property;

class LeadHotel extends Model
{
    //
    protected $fillable = [
        'for','type', 'city', 'apartment', 'locality', 'deliveryExpected', 'bedrooms', 'floorPreference', 
    'availability',  'uuid', 'expectedPrice',
    'timeFrame', 'description', 'company', 'agent', 'prange', 'name', 'phone', 'email', 'customer_id'
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

        public function Property(){
    
            return $this->belongsTo('App\Property');
    
        }
}
