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

// Route::get('denize/', function () {
//     return view('denize');    
// });
// Route::get('cnv/', function () {
//     return view('cnv');    
// });    
// Route::get('alunos/', function () {
//     return view('alunos');    
// });

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");
Route::get('/persons', 'App\Http\Controllers\PersonController@index')->name("person.index");
Route::get('/persons/{id}', 'App\Http\Controllers\PersonController@show')->name("person.show");

// Route::get('/about', function () {
//     return view('about');
// });