<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'username', 'email', 'password', 'active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function phone(){
        return $this->hasOne('App\Phone');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function posts(){
        // + bang trung gian
        return $this->belongsToMany('App\Post', 'comments', 'post_id', 'user_id');
    }
}
