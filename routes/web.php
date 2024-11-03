<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\LikeFotoController;
use App\Http\Controllers\KomentarFotoController;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('welcome');
});

Route::Resource('albums', AlbumController::class);
Route::Resource('fotos', FotoController::class);
Route::Resource('like-fotos', LikeFotoController::class);
Route::Resource('komentar-fotos', KomentarFotoController::class);
Route::Resource('users', UserController::class);