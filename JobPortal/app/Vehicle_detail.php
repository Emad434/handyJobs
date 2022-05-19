<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle_detail extends Model
{
     protected $fillable = [
        'user_id','lience_number','vehicle_type','number_plate','vehicle_brand','vehicle_model','vehicle_color','vehicle_status'
    ];
}
