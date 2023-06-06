<?php

namespace App\Http\Controllers;

use App\Models\portfolio;
use Illuminate\Http\Request; 

class FrontendController extends Controller
{
    // Show Home Page
    public function homePage()
    {
        $portfolio = portfolio::first();
        return view('pages.index', compact('portfolio'));
    }


    // Show Dashboard Page 
    public function dashboard()
    {
        return view('pages.dashboard');
    } 



    // Show Services Page
    public function servicePage()
    {
        return view('pages.services');
    }


    // Show About Page
    public function aboutPage()
    {
        return view('pages.about');
    }


    // Show Portfolio Page
    public function portfolioPage()
    {
        return view('pages.portfolio');
    }


    // Show Team Page
    public function teamPage()
    {
        return view('pages.team');
    }


    // Show Team Page
    public function contactPage()
    {
        return view('pages.contact');
    }



    
    




































}
