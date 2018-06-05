<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function create()
    {
        return view('contacts.contact');
    }

    public function store(ContactFormRequest $request){

        $mailable = new ContactMessageCreated($request->name,$request->email,$request->message);

        Mail::to(config('laracarte.admin_adress'))
              ->send($mailable);

        flashy()->success('Nous vous repondrons plus tard.');

        return redirect(route('home'));
    }
}
