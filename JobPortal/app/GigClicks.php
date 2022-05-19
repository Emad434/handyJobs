<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GigClicks extends Model
{


   public function gig_details(){
   	return $this->belongsTo('App\Gig','gig_id','id');
   }

    public function user_details(){
   	return $this->belongsTo('App\User','click_by','id');
   }


}
