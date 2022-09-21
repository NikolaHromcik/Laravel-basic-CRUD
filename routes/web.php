<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MojController;

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

Route::get('/', [MojController::class, 'pocetna'])->name('pocetna-strana');
Route::get('/prijava', [MojController::class, 'prijava'])->name('prijava');
Route::post('/prijava', [MojController::class, 'obradaPrijave'])->name('obrada-prijave');


Route::get('/admin', [MojController::class, 'admin'])->middleware(['auth'])->name('admin');
Route::get('/admin/prijava/{id}', [MojController::class, 'adminPrijave'])->middleware(['auth'])->name('admin-prijave');
Route::post('/admin/prijava/{id}', [MojController::class, 'promeniStatus'])->middleware(['auth'])->name('promeni-status');

Route::get('/admin/prijava/obrisi/{id}', [MojController::class, 'brisanje'])->middleware(['auth'])->name('brisanje');
Route::post('/admin/prijava/obrisi/{id}', [MojController::class, 'obrisi'])->middleware(['auth'])->name('obrisi-prijavu');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
