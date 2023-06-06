<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\mainPageController;



// Main Website route
Route::get('/', [ FrontendController::class, 'homePage']) -> name('home.page');



// Dashboard Route 
Route::get('/dashboard', [ FrontendController::class, 'dashboard']) -> name('dashboard.page');
Route::get('/services', [ FrontendController::class, 'servicePage']) -> name('service.page');
Route::get('/about', [ FrontendController::class, 'aboutPage']) -> name('about.page');
Route::get('/portfolio', [ FrontendController::class, 'portfolioPage']) -> name('portfolio.page');
Route::get('/team', [ FrontendController::class, 'teamPage']) -> name('team.page');
Route::get('/contact', [ FrontendController::class, 'contactPage']) -> name('contact.page');
// Main Page Route
Route::get('/main', [ mainPageController::class, 'index']) -> name('main.page');
Route::put('/main', [ mainPageController::class, 'update']) -> name('main.update');







