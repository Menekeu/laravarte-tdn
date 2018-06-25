<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEventFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Events extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventsUser = Events::find(Auth::id())->events;
        return view('pages.events.user',compact($eventsUser));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.add_event');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEventFormRequest $request)
    {
        $image = time().'.'.request()->image->getClientOriginalExtension();

        dd($request->video->getPathname());

        DB::table('events')->insert([
            'title'=>request()->title,
            'description'=>request()->description,
            'user_id'=> Auth::id(),
            'image'=>request()->image,
            'video'=>request()->video,
        ]);

        request()->image->move(public_path('/picturesEvents/images'),$image);
        request()->video->move(public_path('/picturesEvents/videos'),$video);

        flashy()->sucess('Votre évènement a été crée avec success');

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.play_event');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
