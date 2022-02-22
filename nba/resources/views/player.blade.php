@extends('layouts.app')

@section('title')
Player
@endsection
@section('content')
<h1>{{$player->first_name}} {{$player->last_name}}</h1>
<p>{{$player->email}}<br><a href="/teams/{{$player->team_id}}">{{ $player->teams->name }}</a><p>



@endsection