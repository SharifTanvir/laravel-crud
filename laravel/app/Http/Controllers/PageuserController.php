<?php

namespace App\Http\Controllers;

use App\Pageuser;
use Illuminate\Http\Request;

class PageuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageusers = Pageuser::all();
        return view('input')->with('pageusers', $pageusers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dd($request->all());
        Pageuser::create([
            'email' => $request->email,
            'password' => $request->password,
            'filename' => "null",
        ]);
        return redirect()->route('pageuser');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pageuser  $pageuser
     * @return \Illuminate\Http\Response
     */
    public function show(Pageuser $pageuser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pageuser  $pageuser
     * @return \Illuminate\Http\Response
     */
    public function edit(Pageuser $pageuser, $id)
    {
        $pageuser = Pageuser::find($id);
        return view('edit')->with('pageuser', $pageuser);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pageuser  $pageuser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pageuser $pageuser, $id)
    {
        $pageuser = Pageuser::find($id);
        $pageuser-> email = $request->email;
        $pageuser->password = $request->password;
        $pageuser->filename = 'null';

        return redirect()->route('pageuser');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pageuser  $pageuser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pageuser $pageuser, $id)
    {
        $pageuser = Pageuser::find($id);
        $pageuser->delete();

        return redirect()->route('pageuser');
    }
}
