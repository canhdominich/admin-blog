<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = [
    	'id', 'mobile', 'user_id'
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
