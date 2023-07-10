<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::prefix('/login')->middleware('auth')->group(function(){

    Route::get('/home', function () {
        return view('home')->name('home');
    });

    Route::get('/table', function () {
        return view('pages.user.index');
    });

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});

Route::get('/login', function(){
    return view('auth.login');
});

Route::get('/results', function(){
    return view('results');
});