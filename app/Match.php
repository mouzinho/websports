<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Team;

class Match extends Model
{
    //
    public function home(){
    	return $this->belongsTo('App\Team');
    }

    public function away(){
    	return $this->belongsTo('App\Team');
    }
}
