<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\dashboard\servicesController;
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

// Main Page make dynaimic
 Route::get('/main', [ dashboardController::class, 'main']) -> name('main.page');
 Route::put('/main', [ dashboardController::class, 'update']) -> name('main.update');

// Services section route
 Route::get('/services/list', [ servicesController::class, 'servicesList']) -> name('show.services.list');
 Route::get('/services', [ servicesController::class, 'showServicesPage']) -> name('show.services.page');
 Route::post('/services', [ servicesController::class, 'services']) -> name('services.page');
 Route::get('/services/edit/{id}', [ servicesController::class, 'showServicesEdit']) -> name('showServices.edit');
 Route::post('/services/update/{id}', [ servicesController::class, 'ServicesUpdate']) -> name('services.update.page');
 Route::get('/services/delete/{id}', [ servicesController::class, 'servicesDelete']) -> name('services.delete.page');






