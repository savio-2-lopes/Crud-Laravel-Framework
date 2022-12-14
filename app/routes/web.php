<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\SiteController;
use App\Models\Client;
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

Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('/sobre', [SiteController::class, 'sobre'])->name('about');
Route::get('/contato', [SiteController::class, 'contato'])->name('contact');
Route::get('/servico/{id}', [SiteController::class, 'servico']);

// Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
// Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
// Route::get('/clients/{id}', [ClientController::class, 'show'])->name('clients.show');
// Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');

// Route::get('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
// Route::put('/clients/{id}', [ClientController::class, 'update'])->name('clients.update');
// Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');

Route::resource('clients', ClientController::class);