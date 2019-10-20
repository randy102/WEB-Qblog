<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";

    protected $fillable = ['id','content','id_blog','id_user'];

    public function user(){
    	return $this->belongsTo('App\User','id_user','id');
    }

    public function blog(){
    	return $this->belongsTo('App\Blog','id_blog','id');
    }
}
