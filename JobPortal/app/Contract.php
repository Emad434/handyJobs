<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Images;
class Contract extends Model
{


    public function buyer_details(){

    	return $this->belongsTo('App\User','buyer_id','id');
    }

     public function provider_details(){

    	return $this->belongsTo('App\User','sellers_id','id');
    }

    public function images(){

        return $this->morphMany(Images::class, 'entity');
    }

    public function cancel_red(){

    	return $this->belongsTo('App/CancelRequest');
    }
}
