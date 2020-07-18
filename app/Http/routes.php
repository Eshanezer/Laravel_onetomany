<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Post;
use App\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function () {
  $user = User::findOrfail(1);

  $user->posts()->save(new Post(['title'=>'title 01','body'=>'body 1']));
});

Route::get('/read', function () {
    $user = User::findOrfail(1);

    //return $user->posts;

    dd($user->posts);

});

Route::get('/update', function () {
    $user = User::findOrfail(1);
    $user->posts()->whereId(1)->update(['title'=>'title updated','body'=>'body updated']);
});

Route::get('/delete', function () {
    $user = User::findOrfail(1);
    $user->posts()->whereId(1)->delete();
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
