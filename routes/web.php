<?php

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
    return view('index.page');
});
Route::get('/blank', function () {
    return view('blank');
});
Route::get('/forum', function () {
    return view('forum.page');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/calendar', function () {
    return view('event-calendar');
});

Route::get('/carousel-month-view', function () {
    return view('carousel-month-view');
});

Route::get('/month', function () {
    return view('month');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/task', function () {
    return view('tasks');
});
