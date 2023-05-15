<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RecruteurController;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Route::prefix('career')->group(function () {

    Route::get('login',[HomeController::class,'loginpage'])->name('loginpage');

});


Route::prefix('recruteur')->group(function () {

    Route::get('list/offer',[RecruteurController::class,'listoffer'])->name('listoffer');
    Route::post('add/offer',[RecruteurController::class,'addoffer'])->name('addoffer');
    Route::post('add/condition/offer/{codeoffer}',[RecruteurController::class,'conditionoffer'])->name('conditionoffer');
    Route::get('edit/offer',[RecruteurController::class,'editoffer'])->name('editoffer');
    Route::post('edit/offer/{codeoffer}',[RecruteurController::class,'updateoffer'])->name('updateoffer');
    Route::get('user/list/offer/{codeoffer}/{codeuser}',[RecruteurController::class,'useroffersouscription'])->name('useroffersouscription');
    Route::get('user/list/offer/file/{codeoffer}/{codeuser}',[RecruteurController::class,'userofferfile'])->name('userofferfile');

});