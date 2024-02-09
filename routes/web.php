<?php

use App\Http\Controllers\SppController;

Route::get('/test', function () {
    return view('test');
});

Route::get('/test2', function () {
    return view('test2');
});

Route::get('/master', function () {
    return view('master');
});

Route::get('/spp/index', [SppController::class, 'index'])->name('spp.index');
Route::get('/spp/create', [SppController::class, 'create'])->name('spp.create');
Route::post('/spp', [SppController::class, 'store'])->name('spp.store');
Route::get('/spp/{spp}/edit', [SppController::class, 'edit'])->name('spp.edit');
Route::get('/spp/{id_spp}/edit', [SppController::class, 'edit'])->name('spp.edit');
Route::PUT('/spp{id_spp}/update',[SppController::class, 'update'])->name('spp.update');
Route::delete('/spp{id_spp}',[SppController::class, 'destroy'])->name('spp.destroy');
