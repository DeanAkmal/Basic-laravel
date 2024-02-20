<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\SppController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;



Route::get('/test', function () {
    return view('test');
});

Route::get('/test2', function () {
    return view('test2');
});

Route::get('/master', function () {
    return view('master');
});

Route::get('/spp', [SppController::class, 'index'])->name('spp.index');
Route::get('/spp/create', [SppController::class, 'create'])->name('spp.create');
Route::post('/spp', [SppController::class, 'store'])->name('spp.store');
Route::get('/spp/{id_spp}/edit', [SppController::class, 'edit'])->name('spp.edit');
Route::PUT('/spp{id_spp}/update',[SppController::class, 'update'])->name('spp.update');
Route::delete('/spp{id_spp}',[SppController::class, 'destroy'])->name('spp.destroy');


// web.php or routes.php (or similar)
    Route::resource('kelas', KelasController::class)->parameters([
        'kelas' => 'kelas'
    ]);

    Route::resource('petugas', PetugasController::class)->parameters([
        'petugas' => 'petugas'
    ]);

    Route::middleware([])->group(function(){
        Route::controller(AuthController::class)->group(function(){
            Route::get('/login', 'login')->name('auth.login');
            Route::post('/authenticate', 'authenticate')->name('auth.authenticate');
            
        });
        
        Route::controller(RegisterController::class)->group(function(){
            Route::get('/register', 'create')->name('register.create');
            Route::post('/register', 'store')->name('register.store');
    
        });

    });

    
    
    
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout')->middleware(['auth']);

    
    Route::middleware(['can:isUser'])->group(function(){
        Route::get('/dashboard/user', [DashboardController::class, 'user'])->name('dashboard.user');
    });

    Route::middleware(['can:isAdmin'])->group(function(){
        Route::get('/dashboard/admin', [DashboardController::class, 'admin'])->name('dashboard.admin');  
        Route::resource('petugas', PetugasController::class)->parameters([
            'petugas' => 'petugas'
        ]);
        Route::resource('kelas', KelasController::class)->parameters([
            'kelas' => 'kelas'
        ]);
    
    });
