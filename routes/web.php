<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/docs', function () {
    return view('view-docs.index');
})->name('docs.index');

Route::get('/docs/consulta-departamento', function () {
    return view('view-docs.departamento');
})->name('docs.departamento');

Route::get('/docs/consulta-provincia', function () {
    return view('view-docs.provincia');
})->name('docs.provincia');

Route::get('/docs/consulta-distrito', function () {
    return view('view-docs.distrito');
})->name('docs.distrito');


Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';