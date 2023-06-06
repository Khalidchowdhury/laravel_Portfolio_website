<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\portfolio;
class mainPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = portfolio::first();
        return view('pages.main', compact('portfolios'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'title'     =>'required',
            'sub_title' =>'required',
        ]);

        $portfolios = portfolio::first();
        $portfolios->title = $request->title; 
        $portfolios->sub_title = $request->sub_title; 
        $portfolios->button_name = $request->button_name; 
        $portfolios->button_link = $request->button_link; 

        if($request->file('bg_img')){
            $img_file = $request->file('bg_img');
            $img_file->storeAs('public/img/','bg_img' . $img_file->getClientOriginalExtension());
            $portfolios->bg_img = 'storage/img/bg_img' . $img_file->getClientOriginalExtension();
        }

        $portfolios->save();

        return redirect() -> route('main.page') -> with('success', 'Your Data are saved');
    }
    









}
