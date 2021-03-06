<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = 'Categories';
    protected $fillable  = [
		'name', 'parent_id', 'thumbnail', 'slug', 'description'
	];

	public function posts(){
		return $this->hasMany('App\Post');
	}
}
