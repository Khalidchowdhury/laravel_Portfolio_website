<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.team.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'hero_image'   => 'required',
            'name'         => 'required',
            'skill'        => 'required',
            'social1_name' => 'required',
            'social1_link' => 'required',            
            'social2_name' => 'required',
            'social2_link' => 'required',            
            'social3_name' => 'required',
            'social3_link' => 'required',
        ]);

        $teams = new Team;
        $teams->name = $request->name; 
        $teams->skill = $request->skill; 
        $teams->social1_name = $request->social1_name; 
        $teams->social1_link = $request->social1_link; 
        $teams->social2_name = $request->social2_name; 
        $teams->social2_link = $request->social2_link; 
        $teams->social3_name = $request->social3_name; 
        $teams->social3_link = $request->social3_link; 


        $hero_image = $request->file('hero_image');
        Storage::putFile("public/img", $hero_image);
        $teams->hero_image = "storage/img/".$hero_image->hashName();

        
        $teams->save();
        return redirect() -> route('team.store.page') -> with('success','your Team has been added');
        
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $teams = Team::get();
        return view('dashboard.team.store', compact('teams'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $delete_data = Team::findOrFail($id);
        $delete_data -> delete();
        
        return redirect()->route('team.store.page')->with('success','your Team has been deleted');
    }
}
