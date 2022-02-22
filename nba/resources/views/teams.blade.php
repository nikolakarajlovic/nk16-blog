@extends('layouts.app')

@section('title', 'Teams')

@section('content')
    

   

    <h1> Teams: </h1>
<div>
    <ul>
    
    @foreach($teams as $team)

    <li>
    <a href="/teams/{{$team->id}}">{{$team->name}}</a>
</li>
@endforeach
    
</ul>
</div>


@endsection