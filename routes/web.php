<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\RecruteurControlleur;
use App\Http\Controllers\AdminController;
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

    Route::get('/espace/client', [ClientController::class, 'userDashboard'])->name('userDashboard');
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
    Route::get('/espace/offreur/addconditionoffer/{id}', [RecruteurControlleur::class, 'addconditionoffer']);
    Route::post('/espace/offreur/savecondition', [RecruteurControlleur::class, 'savecondition']);
    Route::get('/espace/offreur/detailsouscription/{id}', [RecruteurControlleur::class, 'detailsouscription']);
    Route::get('/espace/offreur/validersouscription/{id}', [RecruteurControlleur::class, 'validersouscription']);
    Route::get('/espace/offreur/conditionoffer/{id}', [RecruteurControlleur::class, 'conditionoffer']);
    Route::get('/espace/offreur/editcondition/{id}', [RecruteurControlleur::class, 'editcondition']);
    Route::post('/espace/offreur/updatecondition', [RecruteurControlleur::class, 'updatecondition']);


    // Admin
        // Offreur
    Route::get('/espace/admin', [AdminController::class, 'adminDashboard'])->name('adminDashboard');
    Route::get('/espace/admin/addoffer', [AdminController::class, 'addoffer'])->name('addoffer');
    Route::post('/espace/admin/saveoffer', [AdminController::class, 'saveoffer']);
    Route::post('/espace/admin/updateoffer', [AdminController::class, 'updateoffer']);
    Route::get('/espace/admin/listoffer', [AdminController::class, 'listoffer']);
    Route::get('/espace/admin/candidats', [AdminController::class, 'useroffersouscription']);
    Route::get('/espace/admin/editoffer/{id}', [AdminController::class, 'editoffer']);
    Route::get('/espace/admin/stopoffer/{id}', [AdminController::class, 'stopoffer']);
    Route::get('/espace/admin/addconditionoffer/{id}', [AdminController::class, 'addconditionoffer']);
    Route::post('/espace/admin/savecondition', [AdminController::class, 'savecondition']);
    Route::get('/espace/admin/detailsouscription/{id}', [AdminController::class, 'detailsouscription']);
    Route::get('/espace/admin/validersouscription/{id}', [AdminController::class, 'validersouscription']);
    Route::get('/espace/admin/conditionoffer/{id}', [AdminController::class, 'conditionoffer']);
    Route::get('/espace/admin/editcondition/{id}', [AdminController::class, 'editcondition']);
    Route::post('/espace/admin/updatecondition', [AdminController::class, 'updatecondition']);
    
        // Offreur
    Route::get('/espace/admin/demandeurs', [AdminController::class, 'demandeurs']);
    Route::get('/espace/admin/offreurs', [AdminController::class, 'offreurs']);
    Route::get('/espace/admin/comptesdesactive', [AdminController::class, 'comptesdesactive']);
    Route::get('/espace/admin/addoffreur', [AdminController::class, 'addoffreur']);




});

require __DIR__.'/auth.php';
