<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index']);

route::get('/ex1', [SiteController::class, 'ex1']);

route::get('/ex2', [SiteController::class, 'ex2']);
