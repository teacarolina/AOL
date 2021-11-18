<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Requests\StorePostRequest;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(StorePostRequest $request)
    {
        $validated = $request->validated();

        $contact = new Contact([
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password'))
        ]);

        $contact->save();
        return redirect('/contacts')->with('success', 'Contact saved!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'password'=>'required|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/'
        ]);

        $contact = Contact::find($id);
        $contact->password = Hash::make($request->get('password'));
        $contact->save();
        return redirect('/contacts')->with('success', 'Contact Updated');

    }
    
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('/contacts')->with('success', 'Contact deleted!');
    }
}