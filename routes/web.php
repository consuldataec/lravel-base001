<?php

use App\Http\Controllers\PrimerControlador;
use App\Http\Controllers\PaisController;

use App\Http\Controllers\ChirpController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
});

Route::get('/contact1', function() {
    return view('prueba/contact1');
});

Route::get('doctype', function () {
    $data = array(      "estado"        => "inactivo",
                        "titulo"        => "Admin - Tipo de documentos",
                        "aplicacion"    => "Admin/tipoDocumento/index",);
    return view('admin.index-doctype',$data);
});

Route::resource('chirps', ChirpController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

    Route::get('test',[PrimerControlador::class,'index']);

    Route::resource('pais',PaisController::class);

require __DIR__.'/auth.php';
