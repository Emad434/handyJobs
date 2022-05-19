<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankDetail extends Model
{
    
    public function images(){

        return $this->morphOne(Images::class, 'entity');
    }
    
    
}
