<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreMovieRequest;

class MoviesController extends Controller
{
    
        public function index(){
            $movies = Movie::all();
            return view('movies',compact('movies'));
    }

    public function show($id){
        $movie=Movie::findOrFail($id);
        return view('movie',compact('movie'));
     }

     public function create(Request $request){
         
         return view('create-movie');
     }
     
     public function store(StoreMovieRequest $request)
    {
        DB::listen(function ($query) {
            info($query->sql);
        });

        $data = $request->validated();

        $movie = Movie::create($data);

        
        return redirect("/movies/$movie->id");}
        
}
