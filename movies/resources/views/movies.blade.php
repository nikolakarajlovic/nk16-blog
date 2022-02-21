@extends('layouts.app')

@section('title', 'Movies')

@section('content')
    <body>
    
            <h1>Movies:</h1>
    <ul>
    @foreach($movies as $movie)
        <li>
        <h2><a href="/movies/{{$movie->id}}">{{$movie->title}}</a></h2>
        <p>{{$movie->storyline}}</p>
        </li>
    @endforeach
    </ul>
    </body>
</html>
