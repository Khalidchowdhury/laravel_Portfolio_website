<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function showContact()
    {
        $contacts = contact::get();
        return view('dashboard.contact.contact', compact('contacts'));
    }

    public function createContact(Request $request)
    {
        $this->validate($request, [
            'name'        => 'required',
            'email'       => 'required',
            'phone'       => 'required',
            'description' => 'required',
        ]);      

        contact::create([
            'name'        => $request -> name,
            'email'       => $request -> email,
            'phone'       => $request -> phone,
            'description' => $request -> description,
        ]);

        return redirect()-> route('index.page');
    }


    public function delete($id)
    {
        $delete_data = contact::findOrFail($id);
        $delete_data -> delete();

        return redirect() -> route('contact.page') -> with('success', 'Your Account Has Been Delete Successfully');
    }

}
