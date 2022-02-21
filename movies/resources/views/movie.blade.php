@extends('layouts.app')

@section('title')
Movie
@endsection
@section('content')
        <h1>{{$movie->title}}</h1>
        <h2>{{$movie->year_of_release}}. by {{$movie->director}}.</h2>

            <p>
            A great {{$movie->genre}} movie. <br>
            {{$movie->storyline}}
            </p>

            <hr />

<h4>Comments</h4>
<ul>
    @foreach ($movie->comments as $comment)
    <li>{{$comment->created_at}}<br>{{$comment->content}}</li>
    @endforeach
    <li>
        <form method="POST" action="/movies/{{$movie->id}}/comments">
            @csrf
            <textarea name="content" placeholder="Leave a comment..."></textarea>
            <button type="submit">Submit</button>
        </form>
    </li>
</ul>
 @endsection