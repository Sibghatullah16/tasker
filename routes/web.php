<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Redirect;


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
    return view('index');
});

Route::get('/login', function () {
    return view('login',['message'=>'']);
});


Route::get('/register', function () {
    return view('register');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/details/{id}',[App\Http\Controllers\PostController::class,'details']);

Route::post('/postComment/{id}',[App\Http\Controllers\PostController::class,'postComment']);

Route::get('/comment', [App\Http\Controllers\PostController::class,'comment']);



Route::get('/allpost', [App\Http\Controllers\PostController::class,'showpost']);



Route::post('/store_post',[App\Http\Controllers\PostController::class,'store']);

Route::get('/logout',[App\Http\Controllers\UserController::class,'logout']);

Route::post('/register_post',[App\Http\Controllers\UserController::class,'register']);

Route::post('/login_post',[App\Http\Controllers\UserController::class,'login']);
