<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Movie;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store($movie_id, StoreCommentRequest $request)
    {
        $data = $request->validated();

        $movie = Movie::findOrFail($movie_id);
        $movie->comments()->create($data);

        return back();
    }
}