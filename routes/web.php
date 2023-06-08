<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\RecruteurControlleur;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeControlleur;
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

Route::get('/', [HomeControlleur::class, 'homepage'])->name('homepage');
Route::get('/login', [HomeControlleur::class, 'loginpage'])->name('loginpage');
Route::get('/register', [HomeControlleur::class, 'registerpage'])->name('registerpage');
Route::get('/opportunites', [HomeControlleur::class, 'opportunitiespage'])->name('opportunitiespage');
Route::get('/opportunites/details/{id}', [HomeControlleur::class, 'opportunitiespagedetails'])->name('opportunitiespagedetails');
Route::post('/opportunites/recherche', [HomeControlleur::class, 'opportunitiesrecherche'])->name('opportunitiesrecherche');

Route::post('/loginaction', [HomeControlleur::class, 'loginaction'])->name('loginaction');
Route::post('/registeraction', [HomeControlleur::class, 'registeraction'])->name('registeraction');



Route::middleware('auth')->group(function () {

    Route::get('/logout', function () {
            auth()->logout();
            return redirect('/');
    });

    
    Route::get('/condition/{id}', [HomeControlleur::class, 'condition'])->name('conditionpage');
    Route::post('/savefichier', [HomeControlleur::class, 'savefichier']);


    // Client

    Route::get('/espace/client', [ClientController::class, 'userDashboard'])->name('userDashboard');
    Route::get('/espace/client/souscription', [ClientController::class, 'userSouscription'])->name('userSouscription');
    Route::get('/espace/client/editprofil', [ClientController::class, 'editprofil'])->name('editprofil');
    Route::post('/espace/client/updateprofil', [ClientController::class, 'updateprofil']);

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
    Route::get('/espace/offreur/rejetersouscription/{id}', [RecruteurControlleur::class, 'rejetersouscription']);
    Route::get('/espace/offreur/conditionoffer/{id}', [RecruteurControlleur::class, 'conditionoffer']);
    Route::get('/espace/offreur/editcondition/{id}', [RecruteurControlleur::class, 'editcondition']);
    Route::post('/espace/offreur/updatecondition', [RecruteurControlleur::class, 'updatecondition']);
    Route::get('/espace/offreur/offrepostulant/{id}', [RecruteurControlleur::class, 'offrepostulant']);
    Route::get('/espace/offreur/editprofil', [RecruteurControlleur::class, 'editprofil'])->name('editprofil');
    Route::post('/espace/offreur/updateprofil', [RecruteurControlleur::class, 'updateprofil']);
    Route::get('/espace/offreur/addattachment/{id}', [RecruteurControlleur::class, 'addattachment']);



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
    Route::get('/espace/admin/rejetersouscription/{id}', [AdminController::class, 'rejetersouscription']);
    Route::get('/espace/admin/conditionoffer/{id}', [AdminController::class, 'conditionoffer']);
    Route::get('/espace/admin/editcondition/{id}', [AdminController::class, 'editcondition']);
    Route::post('/espace/admin/updatecondition', [AdminController::class, 'updatecondition']);
    Route::get('/espace/admin/offrepostulant/{id}', [AdminController::class, 'offrepostulant']);
    Route::get('/espace/admin/editprofil', [AdminController::class, 'editprofil'])->name('editprofil');
    Route::post('/espace/admin/updateprofil', [AdminController::class, 'updateprofil']);
    Route::get('/espace/admin/addattachment/{id}', [AdminController::class, 'addattachment']);



    
        // admin
    Route::get('/espace/admin/demandeurs', [AdminController::class, 'demandeurs']);
    Route::get('/espace/admin/offreurs', [AdminController::class, 'offreurs']);
    Route::get('/espace/admin/comptesdesactive', [AdminController::class, 'comptesdesactive']);
    Route::get('/espace/admin/addoffreur', [AdminController::class, 'addoffreur']);
    Route::get('/espace/admin/desactiver/{id}', [AdminController::class, 'desactiver']);
    Route::get('/espace/admin/offres/{id}', [AdminController::class, 'offres']);
    Route::get('/espace/admin/deleteoffre/{id}', [AdminController::class, 'deleteoffre']);
    Route::get('/espace/admin/activeroffre/{id}', [AdminController::class, 'activeroffre']);
    Route::get('/espace/admin/desactiveroffre/{id}', [AdminController::class, 'desactiveroffre']);
    Route::post('/espace/admin/saveoffreur', [AdminController::class, 'saveoffreur']);

    // Export
    Route::get('/espace/admin/exportpostulant', [AdminController::class, 'exportpostulant']);
    Route::get('/espace/admin/exportoffreur', [AdminController::class, 'exportoffreur']);
    
    // Route::get('/espace/admin/exportpostulantoffre', [AdminController::class, 'exportpostulantoffre']);








});

require __DIR__.'/auth.php';
