<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DataPostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;
use App\Models\data_post;
use App\Models\Tag;
use App\Models\Employer;
use Database\Factories\DataPostFactory;

Route::view('/', 'home');

Route::view('/about', 'about');

Route::view('/guidelines', 'guidelines');

Route::view('/policedata', 'policedata');
/**//**//**//**//**//**//**//**//**//**//**//**/

Route::resource('data_post', DataPostController::class);
Route::resource('tag', TagController::class);

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);

Route::post('/logout', [SessionController::class, 'destroy']);



/*
//--------------------------INDEX
Route::get('/data_post', [DataPostController::class, 'index']);
Route::get('/tag', [TagController::class, 'index']);
//------------------------CREATE
Route::get('/data_post/create', [DataPostController::class, 'create']);
Route::get('/tag/create', [TagController::class, 'create']);
//---------------------------- Store
Route::post('/data_post', [DataPostController::class, 'store']);
Route::post('/tag', [TagController::class, 'store']);
//--------------EDIT SINGLE THING
Route::get('/data_post/{data_post}/edit', [DataPostController::class, 'edit']);
Route::get('/tag/{tag}/edit', [TagController::class, 'edit']);
//-------------------- SHOW SINGLE THING
Route::get('/data_post/{data_post}', [DataPostController::class, 'show']);
Route::get('/tag/{tag}', [TagController::class, 'show']);
//------------UPDATE
Route::patch('/data_post/{data_post}', [DataPostController::class, 'update']);
Route::patch('/tag/{tag}', [TagController::class, 'update']);
//-----------DELETE
Route::delete('/data_post/{data_post}', [DataPostController::class, 'destroy']);
Route::delete('/tag/{tag}', [TagController::class, 'destroy']);
*/
