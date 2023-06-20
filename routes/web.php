<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;
use App\Http\Controllers\dashboard\gallaryController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\dashboard\servicesController;
use App\Http\Controllers\dashboard\dashboardController;





/**
 * Frontend Routeing setup
 */

 Route::controller(FrontendController::class)->group(function () { 
    Route::get('/', 'index') -> name('index.page');
});


 /**
  * Dashboard Routing setup
  */

 Route::controller(dashboardController::class)->group(function () {
    Route::get('/home', 'home') -> name('home.page');
    Route::get('/main', 'main') -> name('main.page');
    Route::put('/main', 'update') -> name('main.update');
});


    // Services Controller route
Route::controller(servicesController::class)->group(function () {
    Route::get('/services/list', 'servicesList') -> name('show.services.list');
    Route::get('/services', 'showServicesPage') -> name('show.services.page');
    Route::post('/services', 'services') -> name('services.page');
    Route::get('/services/edit/{id}', 'showServicesEdit') -> name('showServices.edit');
    Route::post('/services/update/{id}', 'ServicesUpdate') -> name('services.update.page');
    Route::get('/services/delete/{id}', 'servicesDelete') -> name('services.delete.page');
});


    // Portfolio Controller 
Route::controller(gallaryController::class)->group(function () {
    Route::get('/portfolio/index', 'index') -> name('portfolio.index.page');
    Route::put('/portfolio/create', 'create') -> name('portfolio.create.page');
    Route::get('/portfolio/store', 'store') -> name('portfolio.store.page');
    Route::get('/portfolio/delete/{id}', 'delete') -> name('portfolio.delete.page');
});


    // Contact Form 
Route::controller(contactController::class)->group(function () {
    Route::get('/contact', 'showContact') -> name('contact.page');
    Route::post('/contact', 'createContact') -> name('contact.create');
    Route::get('/delete/{id}', 'delete') -> name('contact.delete');
});




