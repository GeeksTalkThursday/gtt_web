<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function tags()
    {
    	return $this->belongsToMany('App\Tag');
    }

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function admin(){
        return $this->belongsTo('App\Admin');
    }
}
