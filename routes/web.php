<?php

use App\Http\Controllers\HomeController;
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

// do something in route
Route::get('/greeting', function () {
    return 'Hello World';
});

// call view in route
Route::get('/welcome', function () {
    return view('welcome');
});

// call controller function
Route::get('/',[HomeController::class, 'index' ])->name('home');

// route -> controller -> view
Route::get('/test',[HomeController::class,'test'])->name('test');

//route with parameters
Route::get('/param/{id}/{number}',[HomeController::class,'param'])->name('param');
// route with post
Route::post('/save',[HomeController::class,'save'])->name('save');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
