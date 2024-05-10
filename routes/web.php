<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeminiController;

Route::get('/', [GeminiController::class, 'index'])->name('gemini.index');
Route::post('/gemini', [GeminiController::class, 'store'])->name('gemini.store');
