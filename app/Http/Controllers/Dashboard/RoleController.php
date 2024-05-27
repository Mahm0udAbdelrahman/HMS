<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */



    public function index()
    {
        $data = Role::all();
        return view('dashboard.roles.all',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.roles.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required'

        ]);


        Role::create([
            'name'=>$request->name,
            'guard_name'=>'admin'
        ]);

        return redirect()->route('admin.roles.index')
                        ->with('success','User updated successfully');





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
    public function edit(Role $role)
    {
        return view('dashboard.roles.edit',compact('role'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $this->validate($request, [
            'name' => 'required'

        ]);


        $role->update([
            'name'=>$request->name,
            'guard_name'=>'admin'
        ]);

        return redirect()->route('admin.roles.index')
                        ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table("roles")->where('id',$id)->delete();
        return redirect()->route('admin.roles.index')
                        ->with('success','Role deleted successfully');
    }
}
