<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function users(){
    	 return $this->belongsToMany('App\Product','user_product','product_id','user_id');
    }
}
