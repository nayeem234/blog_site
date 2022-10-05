<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class contactController extends Controller
{
    function index()
    {

        $data = Contact::latest()->get();
        return view('backend.contact', compact('data'));
    }
    function add_modal()
    {
        return view('backend.add_contact');
    }
    function store(Request $request)
    {
        //return $request->all();
        $contact = new Contact();
        $contact->email = $request->email;
        $contact->contact_number = $request->contact_number;
        $contact->address = $request->address;
        $contact->save();
        return redirect()->back();
    }
    function delete($id)
    {
        Contact::findOrFail($id)->delete();
        return redirect()->back();
    }
    function preview($id)
    {
        return Contact::where('id', '=', $id)->get();
    }

    function edit(Request $request)
    {
        // return $request->all();
        $contact = Contact::findOrfail($request->editId);
        $contact->email = $request->email;
        $contact->contact_number = $request->contact_number;
        $contact->address = $request->address;
        $contact->update();
        return redirect()->back();
    }
}
