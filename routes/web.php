<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/cats/{id}/{name}', function ($id, $name) {
    return "我是第" . $id . "號的貓:" . $name;
});

Route::get('/about', [\App\Http\Controllers\WelcomeController::class, 'about']);
// Route::get('/user', [UserController::class, 'index']);

// Route::resource('posts', \App\Http\Controllers\PostsController::class)->only(['index', 'show']);
// Route::resource('posts', \App\Http\Controllers\PostsController::class)->except(['index', 'show']);
Route::resource('posts.comments', \App\Http\Controllers\PostsController::class)->shallow(); 
// 本路由取名為posts，使用PostsController這個controller。
