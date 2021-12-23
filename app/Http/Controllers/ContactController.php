<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'object' => 'required',
            'message' => 'required'
        ]);

        Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'object' => $request->input('object'),
            'message' => $request->input('message')
        ]);

        return redirect('/contact')->with('message', 'Votre message a été envoyé');
    }

    public function show()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('dashboard.contact.messages')->with('contacts', $contacts);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::where('id', $id);
        $contact->delete();

        return redirect('/dashboard/messages')->with('message', 'Le message a été supprimé');
    }
}
