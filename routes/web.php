<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index']);

Route::get('/ex1', [SiteController::class, 'ex1']);

Route::get('/ex2', [SiteController::class, 'ex2']);

Route::get('/include', [SiteController::class, 'incluir']);

Route::get('/components', [SiteController::class, 'components']);

Route::get('/layout', [SiteController::class, 'layout']);

Route::get('/layout2', [SiteController::class, 'layout2']);
