<?php

namespace App\Http\Controllers;


use App\Http\Requests\EditUserFormRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit(Request $request){

        request()->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        dd('tt');
    }
}
