<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = "blogs";

    protected $fillable = ['id','title','link_name','content','short','img','views','highlight','keywords','id_category','id_author'];

    public function category(){
    	return $this->belongsTo('App\Category','id_category','id');
    }

    public function comments(){
    	return $this->hasMany('App\Comment','id_blog','id');
    }

    public function author(){
    	return $this->belongsTo('App\User','id_author','id');
    }
}
