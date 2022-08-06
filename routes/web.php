<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnnoncesController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/dashbord', [HomeController::class, 'index'])->middleware('auth')->name('home');

//Profil Routes

Route::middleware('auth')->prefix('/Profil')->group(function () {

    Route::get('/', [ProfileController::class, 'index'])->name('Profil');
    Route::put('/', [ProfileController::class, 'update'])->name('ProfilUpdate');
});

//Annonces Routes

Route::middleware('auth')->prefix('Annonces')->group(function(){

    Route::get('/' ,  [AnnoncesController::class,'index'])->name('listOfAnnonces');
    Route::get('/create' , [AnnoncesController::class , 'create'])->name('CreateAnnonce');
    Route::post('/create' , [AnnoncesController::class , 'store'])->name('StoreAnnonce');
    Route::get('/{id}/edit' ,  [AnnoncesController::class,'index'])->name('EditAnnoce');
    Route::put('/{id}/edit' ,  [AnnoncesController::class,'index'])->name('UpdateAnnoce');
    Route::delete('/{id}' , [AnnoncesController::class ,'delete'])->name('DeleteAnnonce');



});