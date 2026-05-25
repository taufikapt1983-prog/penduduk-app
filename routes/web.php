<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\ImportController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/penduduk/create/{keluarga_id}', [PendudukController::class, 'create']);
    Route::post('/penduduk/store', [PendudukController::class, 'store']);
    Route::get('/penduduk/edit/{id}', [PendudukController::class, 'edit']);
    Route::post('/penduduk/update/{id}', [PendudukController::class, 'update']);
    Route::get('/penduduk/delete/{id}', [PendudukController::class, 'delete']);

    Route::get('/keluarga/edit/{id}', [KeluargaController::class, 'edit']);
    Route::post('/keluarga/update/{id}', [KeluargaController::class, 'update']);
    Route::get('/keluarga/delete/{id}', [KeluargaController::class, 'delete']);

    Route::resource('keluarga', KeluargaController::class);
	Route::get('/search-penduduk', [PendudukController::class, 'search']);
	
	Route::get('/import-penduduk',[ImportController::class, 'index']);
	Route::post('/import-penduduk',[ImportController::class, 'import']);
	

});

require __DIR__.'/auth.php';