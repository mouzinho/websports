<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Match;
use App\Team;

class MatchesController extends Controller
{
    //
    function index(){
    	$matches = Match::all();

    	return view('matches.index')->withMatches($matches); 
    }

    function create(){
    	return view('matches.create');
    }
}
