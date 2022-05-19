<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Images;

class BlogDetail extends Model
{
     public function blog_user_details(){

     	return $this->belongsTo('App\User','admin_id','id');
     }



     public function tags(){

     	return $this->belongsTo('App\BlogTag','tag_ids','id');
     }


     public function images(){

        return $this->morphMany(Images::class, 'entity');
    }
       
}
