<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    //
	public function roles(){
		return $this->hasMany('App\role');
	}
}
