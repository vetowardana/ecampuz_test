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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'LoginController@index')->name('login');
Route::post('logedin', 'LoginController@logedIn')->name('logedin');
Route::get('logout', 'LoginController@logOut')->name('logout');

Route::resource('instansi', 'InstansiController');