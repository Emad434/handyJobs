<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{



     public function contract()
    {
        return $this->belongsTo('App\Contract','contract_id','id');
    }

    public function buter_details(){

    	 return $this->belongsTo('App\User','buyer_id','id');

    }

    public function selelr_details(){


    	return $this->belongsTo('App\User','user_id','id');

    }





}
