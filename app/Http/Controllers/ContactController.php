<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([

            'name'    => 'required|min:3|max:30',
            'company' => 'required|min:2|max:30',
            'email'   => 'required|min:3|max:30',
            'phone'   => 'required|min:3|max:30',
            'topic'   => 'required|min:3|max:250',
            'terms'   => 'required',

        ]);

        $contact = $request->all();

        Contact::create($contact);

        return redirect('/contact')->with('response', 'Contato enviado com sucesso!');
    }
}
