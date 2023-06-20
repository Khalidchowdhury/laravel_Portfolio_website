<?php

namespace App\Http\Controllers\dashboard;

use App\Models\service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class servicesController extends Controller
{
    
   


    /**
     * 
     * Services Page Controller
     * 
     */

    // services page
    public function showServicesPage()
    {
        return view('dashboard.services.services');
    }

    // Add services page
    public function services(Request $request)
    {
        $this->validate($request, [
            'icon'        => 'required',
            'title'       => 'required',
            'description' => 'required',
        ]);
        
        service::create([
            'icon'        => $request -> icon,
            'title'       => $request -> title,
            'description' => $request -> description,
        ]);

        return redirect()->route('services.page')-> with('success', 'Services are added');

    }


    // Services list
    public function servicesList()
    {
        $services = service::get();
        return view('dashboard.services.list', [
            'services' => $services
        ]);
    }



    // services edit page
    public function showServicesEdit($id)
    {
        $services = service::findOrFail($id);
        return view('dashboard.services.edit', compact('services') );
    }


    public function ServicesUpdate(Request $request, $id)
    {
        $update_data = service::findOrFail($id);

        $update_data -> update([
            'icon'         => $request -> icon,
            'title'        => $request -> title,
            'description'  => $request -> description,
        ]);
        return back() -> with('success', 'Your Update Has been Changed');
    }


    // student delete
    public function servicesDelete($id)
    {
        $delete_data = service::findOrFail($id);
        $delete_data -> delete();

        return redirect() -> route('show.services.list') -> with('success', 'Your Account Has Been Delete Successfully');
    }























    

}
