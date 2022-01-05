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
Route::get('/gallery','App\Http\Controllers\PagesController@gallery');
Route::get('/','App\Http\Controllers\PagesController@ano');
Route::get('/hindi','App\Http\Controllers\PagesController@hindi');
Route::get('/kannada','App\Http\Controllers\PagesController@kannada');
Route::get('/donate','App\Http\Controllers\PagesController@donate');
Route::get('/kannadadonate','App\Http\Controllers\PagesController@kandonate');
Route::get('/telgudonate','App\Http\Controllers\PagesController@teldonate');
Route::get('/hindidonate','App\Http\Controllers\PagesController@hindonate');