<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);
        return view('profile.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $user = User::findOrFail($id);
        $data = $request->all();
        $user->update($data);
        return redirect('/profile/');
    }


    public function updateImg(Request $request, $id)
    {
        $user = User::findOrFail($id);
        if ( $user->photo == '') {
            $photo = $request->file('photo');
            $photo_extension = $photo->getClientOriginalExtension();
            $photo_name = str_random(10).'.'.$photo_extension;
            $photo->move(public_path().'/img', $photo_name);
        }else{
            $photo = $request->file('photo');
            $photo_extension = $photo->getClientOriginalExtension();
            $photo_name = $user->photo;
            $photo->move(public_path().'/img', $photo_name);
        }

        $fileData = [
            'photo' => $photo_name,
        ];

        $user->update($fileData);
        return redirect('/profile/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
