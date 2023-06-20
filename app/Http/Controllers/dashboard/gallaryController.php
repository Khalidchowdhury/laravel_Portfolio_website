<?php

namespace App\Http\Controllers\dashboard;

use App\Models\gallary;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class gallaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.portfolio.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'image'       => 'required',
            'title'       => 'required',
            'subtitle'    => 'required',
            'description' => 'required',
            'client'      => 'required',
            'category'    => 'required',
        ]);
        
        
        $gallarys = new gallary;
        $gallarys->title = $request->title; 
        $gallarys->subtitle = $request->subtitle; 
        $gallarys->description = $request->description; 
        $gallarys->client = $request->client; 
        $gallarys->category = $request->category; 


        $image = $request->file('image');
        Storage::putFile("public/img", $image);
        $gallarys->image = "storage/img/".$image->hashName();

        
        $gallarys->save();
        return redirect() -> route('portfolio.index.page') -> with('success', 'Your Data are saved');
        

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gallarys = gallary::get();
        return view('dashboard.portfolio.store', compact('gallarys'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $delete_data = gallary::findOrFail($id);
        $delete_data -> delete();

        return redirect() -> route('portfolio.store.page') -> with('success', 'Your Account Has Been Delete Successfully');
    }
}
