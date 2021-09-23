<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;

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



Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('home.index');
    })->name('homepage');

    Route::get('user/create', function () {
        return view('home.create');
    })->name('users.create');

    Route::get('patient/create', function () {
        return view('patients.create');
    })->name('patients.create');


    Route::get('patients', function () {
        return view('patients.index');
    })->name('patients');

    Route::post('logout', [GeneralController::class, 'logout'])->name('logout');

    Route::get('add/observation/{patient_id}', [GeneralController::class, 'createObservation'])->name('observation');
});

Route::middleware(['guest'])->group(function () {
    Route::get('login', function () {
        return view('auth.login');
    })->name('login');

});


// Route::get('ab', App\Http\Livewire\Login::class);

