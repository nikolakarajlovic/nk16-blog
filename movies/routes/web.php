<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/movies', [MoviesController::class,'index']);
Route::get('/movies/create', [MoviesController::class, 'create']);
Route::get('/movies/{id}', [MoviesController::class,'show']);
Route::post('/movies', [MoviesController::class, 'store']);

Route::post('/movies/{movie_id}/comments', [CommentController::class, 'store']); 