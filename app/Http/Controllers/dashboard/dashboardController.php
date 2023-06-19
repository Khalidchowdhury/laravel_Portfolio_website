<?php

namespace App\Http\Controllers\dashboard;

use App\Models\mainPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class dashboardController extends Controller
{
    
    /**
     * 
     * Dashboard View Controller 
     * 
     */

    // Home Controller
    public function home()
    {
        return view('dashboard.home');
    }


    // main page 
    public function main()
    {   
        $mainPages = mainPage::first();
        return view('dashboard.main', compact('mainPages'));
    }

    // Main page update
    public function update(Request $request)
    {
        $this->validate($request, [
            'title'     =>'required',
            'subtitle'  =>'required',
        ]);

        $mainPages = mainPage::first();
        $mainPages->title = $request->title; 
        $mainPages->subtitle = $request->subtitle; 
        $mainPages->button_name = $request->button_name; 
        $mainPages->button_url = $request->button_url; 

        if($request->file('header_img')){
            $img_file = $request->file('header_img');
            $img_file->storeAs('public/img/','header_img' . $img_file->getClientOriginalExtension());
            $mainPages->header_img = 'storage/img/header_img' . $img_file->getClientOriginalExtension();
        }

        $mainPages->save();
        
        return redirect() -> route('main.page') -> with('success', 'Your Data are saved');
    }
    





















}
