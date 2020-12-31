<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::middleware(['auth'])->group(function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/contacts', [App\Http\Controllers\HomeController::class, 'contacts'])->name('contacts');
    Route::post('/contact_add/{id}', [App\Http\Controllers\HomeController::class, 'contactAdd'])->name('contact_add');
    Route::get('/contacts_save', [App\Http\Controllers\HomeController::class, 'contactsSave'])->name('contacts_save');
    Route::post('/contact_delete/{id}', [App\Http\Controllers\HomeController::class, 'contactDelete'])->name('contact_delete');
});
