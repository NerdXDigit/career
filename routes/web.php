<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\RecruteurControlleur;
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
    return view('welcome');
});

// Route::get('/espace/client', function () {
//     return view('user.dashboard');
// });



Route::middleware('auth')->group(function () {
    // Client

    Route::get('/espace/client', [ClientController::class, 'userDashboard']);
    Route::get('/espace/client/souscription', [ClientController::class, 'userSouscription']);

    // Offreur
    Route::get('/espace/offreur', [RecruteurControlleur::class, 'offreurDashboard'])->name('offreurDashboard');
    Route::get('/espace/offreur/addoffer', [RecruteurControlleur::class, 'addoffer'])->name('addoffer');
    Route::post('/espace/offreur/saveoffer', [RecruteurControlleur::class, 'saveoffer']);
    Route::post('/espace/offreur/updateoffer', [RecruteurControlleur::class, 'updateoffer']);
    Route::get('/espace/offreur/listoffer', [RecruteurControlleur::class, 'listoffer']);
    Route::get('/espace/offreur/candidats', [RecruteurControlleur::class, 'useroffersouscription']);
    Route::get('/espace/offreur/editoffer/{id}', [RecruteurControlleur::class, 'editoffer']);
    Route::get('/espace/offreur/stopoffer/{id}', [RecruteurControlleur::class, 'stopoffer']);
});

require __DIR__.'/auth.php';
