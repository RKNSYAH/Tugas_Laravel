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

Route::get('/', function()
{
   return View::make('pages.home');
});
Route::get('/cv', function()
{
   return View::make('pages.cv');
});
Route::get('/form', function()
{
   return View::make('pages.form');
});
Route::get('/data',function()
{
   return View::make('pages.data');
});
Route::get('/cvshow',function()
{
   return View::make('pages.cvshow');
});
Route::get('/data','App\Http\Controllers\FormController@data')->name('DataPage');
Route::post('/cvshow','App\Http\Controllers\FormController@PostData');
Route::post('/data','App\Http\Controllers\FormController@DeleteData');
Route::post('/form','App\Http\Controllers\FormController@SubmitData');
