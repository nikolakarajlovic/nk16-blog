<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teams;

class TeamsController extends Controller
{
    public function index(){
        $teams = Teams::select('id','name')->get();
        return view('teams',compact('teams'));
    }

    public function show($id){
        $team=Teams::findOrFail($id);
        return view('team',compact('team'));
     }
}
