<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ContainerController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/containers',[ContainerController::class,'index'])->name('containers.index');
    Route::get('/containers/add',[ContainerController::class,'create'])->name('containers.create');
    Route::post('/containers/store', [ContainerController::class, 'store'])->name('containers.store');
    Route::delete('/containers/{id}', [ContainerController::class, 'destroy'])->name('containers.destroy');
});
