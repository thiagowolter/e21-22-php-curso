<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/redirect',[HomeController::class,'redirect']);

Route::get('/',[HomeController::class,'index']);

Route::get('/allproducts',[HomeController::class,'allproducts']);

Route::get('/search',[HomeController::class,'search']);

Route::post('/addcart/{id}',[HomeController::class,'addcart']);

// ADMIN =================== 

Route::get('/product',[AdminController::class,'product']);

Route::post('/uploadproduct',[AdminController::class,'uploadproduct']);

Route::get('/showproduct',[AdminController::class,'showproduct']);

Route::get('/deleteproduct/{id}',[AdminController::class,'deleteproduct']);

Route::get('/updateproduct/{id}',[AdminController::class,'updateproduct']);

Route::post('/updateform/{id}',[AdminController::class,'updateform']);

Route::get('/addcart/{id}',[HomeController::class,'addcart']);