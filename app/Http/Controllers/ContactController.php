<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactConfirmation;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('sections.contact');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save();
        Mail::to($contact->email)->send(new ContactConfirmation($contact));

        return redirect()->back()->with('success', 'Pesan berhasil dikirim.');
    }
}
