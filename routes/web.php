<?php
namespace App\Http\Controllers;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/table', function () {
    return view('pages.user.index');
});


Route::get('/add/candidat',function(){
    return view('layouts.candidat.add');
});

Route::get('/liste/candidat',[CandidatController::class,'index'])->name('liste.candidat');

Route::post('/Enregistrer/candidat',[CandidatController::class,'store'])->name('store.candidat');

Route::get('/elections',[ElectionController::class,'index']);

Route::get('/vote', [ElecteurController::class,'vote'])->name('candidat.vote');

