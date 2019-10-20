<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $fillable = ['name','link_name','id'];
    
    public function blogs(){
    	return $this->hasMany('App\Blog','id_category','id');
    }
}
