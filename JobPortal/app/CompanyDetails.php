<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyDetails extends Model
{
    	protected $table = "company_details";

     protected $fillable = [
        'has_company','client_id','cvr_number'
    ];

}
