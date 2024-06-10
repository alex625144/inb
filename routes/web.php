<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneratorController;
use App\Http\Controllers\RetrieverController;

Route::get('retrieve', [RetrieverController::class, 'retrieve']);

Route::get('generate', [GeneratorController::class, 'generate']);
