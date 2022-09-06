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
Route::get('/home', function () {
    return 'Mahmoud Elshahawy home';
});
Route::get('shahawy','ShahawyController@firstFunc');
Route::get('users/{id}','ShahawyController@show');
Route::get('reds','redsController@index');
Route::get('reds/{id}','redsController@show');

Route::resource('products', 'ProductController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
