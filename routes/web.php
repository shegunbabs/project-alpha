<?php

use App\Http\Controllers\Doctor\Auth\AuthenticatedSessionController;
use App\Http\Livewire\Auth\LoginDoctor;
use App\Http\Livewire\Auth\RegisterDoctor;
use App\Http\Livewire\Doctors\Dashboard;
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
    return view('layouts.doctor.dashboard', ['page_header' => 'Dashboard', 'slot' => 'content']);
});

Route::prefix('doctor')->group(function(){

    Route::get('register', RegisterDoctor::class)->name('doctor.register');
    Route::get('login', LoginDoctor::class)->name('doctor.login');


    Route::get('dashboard', Dashboard::class)->name('doctor.dashboard')->middleware('auth:doctor');

});


Route::get('/doctor', function () {
    return view('doctor');
})->middleware(['auth'])->name('doctor');

require __DIR__.'/auth.php';
