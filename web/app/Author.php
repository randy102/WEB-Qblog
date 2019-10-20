<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = "authors";

    protected $fillable = ['id','birth_date','place','img','self_info','id_user'];

    public function user(){
    	return $this->belongsTo('App\User','id_user','id');
    }
}
