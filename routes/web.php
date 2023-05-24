<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesignPatternController;


 
Route::get('/factory', [DesignPatternController::class, 'factoryCreate'])->name('factory.create');
Route::post('/factory', [DesignPatternController::class, 'factoryStore'])->name('factory.store');

Route::get('/builder', [DesignPatternController::class, 'builderCreate'])->name('builder.create');
Route::post('/builder', [DesignPatternController::class, 'builderStore'])->name('builder.store');

