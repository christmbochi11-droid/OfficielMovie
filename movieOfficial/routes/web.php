<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\movieController;
Route::get('/', function () { return view('welcome');});
//Movie show
Route::get('/movies', [movieController::class, 'index']);

//Movie CREATE
Route::get('/movies/create', [movieController::class, 'create']);
Route::post('/movies', [movieController::class, 'store']);


Route::get('/movies/{id}', [movieController::class, 'show']);