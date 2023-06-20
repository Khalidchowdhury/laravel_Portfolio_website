<?php

namespace App\Http\Controllers\frontend;

use App\Models\gallary;
use App\Models\service;
use App\Models\mainPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{


    /**
     * 
     * Application Frontend View Controller
     * 
     */
    public function index(){
        $services = service::get();
        $mainPages = mainPage::first();
        $gallarys = gallary::get();
        return view('frontend.index', compact('mainPages', 'services', 'gallarys'));
    }


    


    



















}
