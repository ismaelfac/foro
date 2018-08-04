
<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', [
    'as' => 'post.index',
    'uses' => 'PostController@index'
]);
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('post/{post}-{slug}', [
    'as' => 'post.show',
    'uses' => 'PostController@show'
])->where('post', '\d+');