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

Route::get('/telgu','App\Http\Controllers\PagesController@telgu');
Route::get('/test','App\Http\Controllers\PagesController@home');
Route::get('/register','App\Http\Controllers\PagesController@register');
Route::get('/login','App\Http\Controllers\PagesController@login');
Route::get('/gallery','App\Http\Controllers\PagesController@gallery');
Route::get('/','App\Http\Controllers\PagesController@ano');
Route::get('/hindi','App\Http\Controllers\PagesController@hindi');
Route::get('/kannada','App\Http\Controllers\PagesController@kannada');
Route::get('/verify','App\Http\Controllers\PagesController@verify');