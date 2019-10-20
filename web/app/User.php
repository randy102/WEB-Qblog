<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','level','id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    protected $table = "users";

    public function author(){
        return $this->hasOne('App\Author','id_user','id');
    }

    public function comments(){
        return $this->hasMany('App\Comment','id_user','id');
    }

    public function blogs(){
        return $this->hasMany('App\Blog','id_author','id');
    }

    
}
