<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['name','post_id','email' ,'comment','approved'];

    public function post()
    {
    	return $this->belongsTo('App\Post');
    }
}
