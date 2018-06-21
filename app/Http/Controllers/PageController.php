<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
   public function home(){
       return view('pages.home');
   }

    public function about(){
        return view('pages.about');
    }

    public function lang(Request $request){
       Session::put('applocale', $request->lan);
       return redirect()->back();
    }
}
