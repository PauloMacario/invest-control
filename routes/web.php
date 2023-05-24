<?php

use App\Http\Controllers\SectorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('sectors')->group(
    function () {
        
        Route::get('/', [SectorController::class, 'index'])
            ->name('sectors.index');
    }
);
