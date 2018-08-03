<?php
/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Posts
Route::get('post/create', [
    'uses' => 'CreatePostController@create',
    'as' => 'post.create',
]);
Route::post('post/create', [
    'uses' => 'CreatePostController@store',
    'as' => 'post.store',
]);