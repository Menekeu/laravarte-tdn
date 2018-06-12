<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactMessageCreated;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function create()
    {
        return view('contacts.contact');
    }

    /**
     * @param ContactFormRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ContactFormRequest $request){

        $msg = Message::create($request->only('name','email','message'));

        Mail::to(config('laracarte.admin_adress'))
              ->send(new ContactMessageCreated($msg));

        flashy()->success('Nous vous repondrons plus tard.');

        return redirect(route('home'));
    }
}
