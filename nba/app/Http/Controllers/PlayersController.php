<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Players;

class PlayersController extends Controller
{
    public function show($id){
        $player=Players::with('teams')->findOrFail($id);
        
        return view('player',compact('player'));
     }
}
