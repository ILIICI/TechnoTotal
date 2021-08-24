<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::get('/', 'App\Http\Controllers\PagesController@main');
Route::get('/about', 'App\Http\Controllers\PagesController@about');

Route::get('/contactus', 'App\Http\Controllers\PagesController@contactus');
Route::post('/contactus','App\Http\Controllers\PagesController@sendcontact');

Route::get('/products', 'App\Http\Controllers\CatalogueController@index');
Route::get('/search', 'App\Http\Controllers\CatalogueController@search');

Route::get('/service/{Category}','App\Http\Controllers\ServiceController@getAllData');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
