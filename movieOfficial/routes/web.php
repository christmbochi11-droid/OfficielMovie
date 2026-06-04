<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\movieController;
Route::get('/', function () { return view('welcome');});
Route::get('/movies', [movieController::class, 'index']);

//Movie CREATE
Route::get('/movies/create', [movieController::class, 'create']);
Route::post('/movies', [movieController::class, 'store']);

//movie edit
Route::get('/movies/{id}/edit', [MovieController::class, 'edit']);
Route::put('/movies/{id}', [MovieController::class, 'update']);

//Movie show
Route::get('/movies/{id}', [movieController::class, 'show']);