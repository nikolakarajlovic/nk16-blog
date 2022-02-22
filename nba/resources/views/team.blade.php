@extends('layouts.app')

@section('title')
Team
@endsection
@section('content')
<h1>{{$team->name}}</h1>
<p>{{$team->email}} <br>
{{$team->address}}<br>
{{$team->city}}<p>
    <h4>Players:</h4>
    <ul>
    @foreach ($team->players as $player)
    <li><a href="/player/{{$player->id}}">{{$player->first_name}} {{$player->last_name}}</a></li>
    @endforeach
</ul>
@endsection