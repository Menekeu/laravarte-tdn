<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditUserFormRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
   public function home(){
//       $events = Events::all();
       return view('pages.home');
   }

    public function about(){
        return view('pages.about');
    }

    public function lang(Request $request){
       Session::put('applocale', $request->lan);
       return redirect()->back();
    }

    public function edit(Request $request){

        $imageName = time().'.'.request()->editImage->getClientOriginalExtension();
        request()->editImage->move(public_path('/users'), $imageName);

        $user = User::find(Auth::id());
        $user->name = request()->editName;
        $user->email = request()->editEmail;
        $user->profile = $imageName;
        $user->save();

        return back();

    }
}
