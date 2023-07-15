<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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


Route::get('/add/candidat',function(){
    return view('candidat.add');
});

Route::get('/ajouter/election',[ElectionController::class,'index']);
Route::get('/liste/election',[ElectionController::class,'liste'])->name('liste.election');
//Route::get('/liste/election',[ElectionController::class,'liste'])->name('liste.election');
Route::post('/Enregistrer/election',[ElectionController::class,'store'])->name('store.election');
Route::get('/Supprimer/election/{id}',[ElectionController::class,'destroy'])->name('delete.election');
Route::get('/Editer/election/{id}',[ElectionController::class,'edit'])->name('editer.election');
Route::post("modifier/election/{id}",[ElectionController::class,'update'])->name("update.election");
Route::get("resul/election",[ElectionController::class,'index']);

Route::get('/add/candidat',[CandidatController::class,'index']);
Route::get('/index/candidat',[CandidatController::class,'liste'])->name('index.candidat');
Route::post('/Enregistrer/candidat',[CandidatController::class,'store'])->name('store.candidat');
Route::get('/Supprimer/candidat/{id}',[CandidatController::class,'destroy'])->name('delete.candidat');
Route::get('/Editer/candidat/{id}',[CandidatController::class,'edit'])->name('editer.candidat');
Route::post("modifier/candidat/{id}",[CandidatController::class,'update'])->name("update.candidat");

Route::get('/vote', [ElecteurController::class,'vote'])->name('candidat.vote');
//Route::get('/index/electeur',[ElecteurController::class,'index']);
Route::get('/accueil/electeur',[ElecteurController::class,'index'])->name('electeur');


