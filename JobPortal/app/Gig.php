<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
    
	public function category_details(){

		return $this->belongsTo('App\Services','service_category','id');

	 
	}


	public function user_details(){

		return $this->belongsTo('App\User','user_id','id');

	 
	}
     
}
