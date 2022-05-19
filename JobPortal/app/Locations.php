<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    //

    protected $fillable = [
        'parent_locations','name','postal_code','location_type',
    ];

 

}
