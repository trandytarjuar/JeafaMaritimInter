<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Auth;

class Contact_Controller extends Controller
{
    public function index()
    {
        $contact = ContactUs::all();
        return view('contactus.index', compact('contact'));
    }
    public function add()
    {
        return view('contactus.add');
    }
    public function submitcontact(Request $request)
    {
        $user = Auth::user();
        $name = $user->name;
        $gmaps = $request->input('gmaps');
        $address = $request->input('address');
        $phonenumber = $request->input('phonenumber');
        $email = $request->input('email');

        $contact = new ContactUs([
            'gmaps' => $gmaps,
            'alamat' => $address,
            'no_telp' => $phonenumber,
            'email' => $email,
            'created_by' => $name,
            'created_date' => now(), // Set created_date to the current timestamp
        ]);
        // var_dump($contact); die;

        // Save the contact record to the database
        if ($contact->save()) {
            // Return a JSON response indicating success
            // return response()->json(['success' => true]);
            return response()->json(['success' => true, 'message' => 'Add Data Contact success']);
        } else {
            // Return a JSON response indicating an error
            return response()->json(['error' => false, 'message' => 'Add Data Contact fail']);
        }
    }

    public function edit($id)
    {
        $contact = ContactUs::findOrFail($id);
        return view('contactus.edit', compact('contact'));
    }

    public function updatecontact(Request $request, $id)
    {
        
        $contact = ContactUs::findOrFail($id);

        $user = Auth::user();
        $name = $user->name;

        $gmaps = $request->input('gmaps');
        $address = $request->input('address');
        $phonenumber = $request->input('phonenumber');
        $email = $request->input('email');

        $contact->gmaps = $gmaps;
        $contact->alamat = $address;
        $contact->no_telp = $phonenumber;
        $contact->email = $email;

        $contact->updated_date = now();
        $contact->update_at = $name; 


        if ($contact->save()) {
            // Return JSON response indicating success
            return response()->json(['success' => true, 'message' => 'Update Data Contact success']);
        } else {
            // Return JSON response indicating an error
            return response()->json(['error' => true, 'message' => 'Update Data Contact fail']);
        }
    }
}
