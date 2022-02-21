@extends('layouts.app')

@section('title', 'Create movie')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<form method="POST" action="/movies">
    @csrf

    <label for="title">Title:</label><br>
    <input name="title" placeholder="Title" value="{{ old('title') }}"/>
    <br/>
    <label for="genre">Genre:</label><br>
    <input name="genre" placeholder="Genre" value="{{ old('genre') }}"/>
    <br/>
    <label for="director">Director:</label><br>
    <input name="director" placeholder="Director" value="{{ old('director') }}"/>
    <br/>
    <label for="year_of_release">Year of release:</label><br>
    <input name="year_of_release" placeholder="Year" value="{{ old('year_of_release') }}"/>
    <br/>
    <label for="storyline">Storyline:</label><br>
    <textarea name="storyline" placeholder="Storyline"value="{{ old('storyline') }}"></textarea>
    <br/>
    <button type="submit">Create a movie</button>
</form>
@endsection