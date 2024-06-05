<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PhotographersController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\ContactsController;


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
    return view('accueil');
});

// ROUTE PHOTOGRAPHERS

Route::get('/photographers', [PhotographersController::class, 'listPhotographers']);

Route::get('/photographers/{id}/edit', [PhotographersController::class, 'edit'])->name('photographers.edit');

Route::get('/photographers/{id}/destroy', [PhotographersController::class, 'destroy'])->name('photographers.destroy');

Route::put('/photographers/{id}/update', [PhotographersController::class, 'update'])->name('photographers.update');

Route::get('/photographers/create', [PhotographersController::class, 'create'])->name('photographers.create');

Route::put('/photographers/store', [PhotographersController::class, 'store'])->name('photographers.store');

// ROUTE CLIENTS

Route::get('/clients', [ClientsController::class, 'listClients']);

Route::get('/clients/{id}/edit', [ClientsController::class, 'edit'])->name('clients.edit');

Route::get('/clients/{id}/destroy', [ClientsController::class, 'destroy'])->name('clients.destroy');

Route::put('/clients/{id}/update', [ClientsController::class, 'update'])->name('clients.update');

Route::get('/clients/create', [ClientsController::class, 'create'])->name('clients.create');

Route::put('/clients/store', [ClientsController::class, 'store'])->name('clients.store');

// ROUTE SESSIONS

Route::get('/sessions', [SessionsController::class, 'listSessions']);

Route::get('/sessions/{id}/edit', [SessionsController::class, 'edit'])->name('sessions.edit');

Route::get('/sessions/{id}/destroy', [SessionsController::class, 'destroy'])->name('sessions.destroy');

Route::put('/sessions/{id}/update', [SessionsController::class, 'update'])->name('sessions.update');

Route::get('/sessions/create', [SessionsController::class, 'create'])->name('sessions.create');

Route::put('/sessions/store', [SessionsController::class, 'store'])->name('sessions.store');


// ROUTE CONTACT


Route::post('contacts/store', [ContactsController::class, 'store'])->name('contacts.store');

Route::get('/contacts', [ContactsController::class, 'listContacts'])->name('contacts');

Route::get('/contacts/{id}/destroy', [ContactsController::class, 'destroy'])->name('contacts.destroy');

Route::put('/contacts/{id}/update', [ContactsController::class, 'update'])->name('contacts.update');

Route::get('/contacts/create', [ContactsController::class, 'create'])->name('contacts.create');

Route::put('/contacts/store', [ContactsController::class, 'store'])->name('contacts.store');

Route::get('/contacts/{id}/edit', [ContactsController::class, 'edit'])->name('contacts.edit');


