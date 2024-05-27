<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $data = Permission::all();

      return view('dashboard.permissions.all',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.permissions.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'

        ]);


        Permission::create([
            'name'=>$request->name,
            'guard_name'=>'admin'
        ]);


        return redirect()->route('admin.permissions.index')
                        ->with('success','User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {


        return view('dashboard.permissions.edit',compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {

        $this->validate($request, [
            'name' => 'required'

        ]);


        $permission->update([
            'name'=>$request->name,
            'guard_name'=>'admin'
        ]);

        return redirect()->route('admin.permissions.index')
                        ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        DB::table("permissions")->where('id',$id)->delete();


        return redirect()->route('admin.permissions.index')
                        ->with('success','User deleted successfully');
    }
}