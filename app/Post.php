<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 

class Post extends Model
{
    public function cats()
    {
    	return $this->belongsToMany('App\Cat') ;
    }

    public function getImageUrlAttribute()
    {
    	$imageUrl = "";
    	$pathUrl = public_path().'/image/'.$this->picture;
    	if (!is_null($this->picture)) {
    		if (file_exists($pathUrl)) {
    			$imageUrl = asset('image/'.$this->picture);
    		}
    	}
    	return $imageUrl;
    }
}
