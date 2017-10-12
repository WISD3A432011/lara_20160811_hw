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

Route::get('/', ['as' => 'home.blade.php',function () {
    return view('home');
}]);

Route::get('/about',['as' => 'about.blade.php', function () {
    return view('about');
}]);

Route::get('/new',['as' => 'new.blade.php', function () {
    return view('new');
}]);
