<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 

class Post extends Model
{
    public function cats()
    {
    	return $this->belongsToMany('App\Cat') ;
    }
}
