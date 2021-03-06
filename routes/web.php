<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::post('register', 'AuthController@register');
// Route::post('login', 'AuthController@login');

// removed to prevent from needing PW. Didn't work.
// Route::middleware('auth:api')->group(function () {

    // });
    
Route::get('user/{userId}/detail', 'UserController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'PostController@all');

// Route::get('/post/'.{$postId}, 'PostController@single');

Route::get('/', 'HomeController@index')->name('index');