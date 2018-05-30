<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = User::get();
      return view ('users.index', compact('user'));
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
        $users = User::findOrFail($id);
        return view ('users.edit', compact('users'));
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
      $data = [
       'firstName' => $request->input('firstName'),
       'middleName' => $request->input('middleName'),
       'lastName' => $request->input('lastName'),
       'email' => $request->input('email'),
       'role_id' => $request->input('role_id')
      ];

     $findRecord = User :: findOrFail($id);
     $update = $findRecord->update($data);

     if($update):
       Session::flash('message', 'Instance updated successfully.');
       Session::flash('status', 'Instance updated successfully.');
       return redirect(route('users.index'));
     else:
       Session::flash('message', 'Instance updated unsuccessfully.');
       Session::flash('status', 'Instance updated unsuccessfully.');
       return redirect(route('users.edit'))->withInputs();
     endif;
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
