<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\dashboard\dashboardController;





/**
 * 
 * Frontend Routeing setup
 * 
 */

 Route::get('/', [ FrontendController::class, 'index']) -> name('index.page');




 /**
  * 
  * Dashboard Routing setup
  * 
  */
 Route::get('/home', [ dashboardController::class, 'home']) -> name('home.page');

//  Main Page make dynaimic
 Route::get('/main', [ dashboardController::class, 'main']) -> name('main.page');
 Route::put('/main', [ dashboardController::class, 'update']) -> name('main.update');








