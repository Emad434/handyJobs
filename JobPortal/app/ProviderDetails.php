<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProviderDetails extends Model
{

	protected $table = "provider_details";

     protected $fillable = [
        'user_id','profession', 'location', 'minimum_rate','resume_category','skills','city','intro','school_name','qualification','school_start_date','schol_end_date' ,'employer','job_title','jobstart_date','jobend_date','passport_size_pic','resume',
        'busines_type','cvr_number','cpr_number'
    ];



    public function provider_details(){


    	return $this->belongsTo('App\User','user_id','id');
    }
}
