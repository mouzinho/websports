<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Match;

class Team extends Model
{
	protected $fillable = ['name', 'abreviation', 'badge', 'updated_at'];

    public function fixtures(){
    	return $this->hasMany('App\Match');
    }
    
	public function matches(){
		return $this->hasMany('App\Match');
	}
}
