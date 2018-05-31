<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Permission;
use Session;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $permission = Permission::get();
      return view ('permissions.index', compact('permission'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view ('permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $permissionData = [
        'permission' => $request->input('permission'),
        'role_id' => $request->input('role_id')
      ];

      $savePermission = Permission::create($permissionData);

      if($savePermission):
        return redirect('permissions');
      else:
        return redirect()->back()->withInput();
      endif;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $permissions = Permission::findOrFail($id);
      return view ('permissions.edit', compact('permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $data = [
        'permission' => $request->input('permission'),
        'role_id' => $request->input('role_id')
      ];

      $findRecord = Permission :: findOrFail($id);
      $update = $findRecord->update($data);

      if($update):
        Session::flash('message', 'Instance updated successfully.');
        Session::flash('status', 'Instance updated successfully.');
        return redirect(route('permissions.index'));
      else:
        Session::flash('message', 'Instance updated unsuccessfully.');
        Session::flash('status', 'Instance updated unsuccessfully.');
        return redirect(route('permissions.edit'))->withInputs();
      endif;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $permissionRecord = Permission::findOrFail($id);

      if (empty($permissionRecord)):
          Session::flash('message', 'Instance deleted unsuccessfully.');
          Session::flash('status', 'Instance deleted unsuccessfully.');
          return redirect(route('permissions.index'));
      else:
          $deleteRecord = $permissionRecord->delete($id);
          Session::flash('message', 'Instance deleted successfully.');
          Session::flash('status', 'Instance deleted successfully.');
          return redirect(route('permissions.index'));
      endif;
    }
}
