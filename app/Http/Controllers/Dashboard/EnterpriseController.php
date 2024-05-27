<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Enterprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class EnterpriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =  Enterprise::all();
        return view('dashboard.enterprises.all', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.enterprises.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(App::getLocale()=='en')
        {

            $request->validate([
                'name_en' => 'required|string',
            ]);


            Enterprise::create([
                'name_en' => $request->name_en

            ]);

        }

        if(App::getLocale()=='ar')
        {

            $request->validate([
                'name_ar' => 'required|string',
            ]);


            Enterprise::create([
                'name_ar' => $request->name_ar

            ]);

        }

        if(App::getLocale()=='fr')
        {

            $request->validate([
                'name_fr' => 'required|string',
            ]);


            Enterprise::create([
                'name_fr' => $request->name_fr

            ]);

        }



        return redirect()->route('admin.enterprises.index')
                        ->with('success','User created successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enterprise $enterprise)
    {
        return view('dashboard.enterprises.edit', compact('enterprise'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Enterprise $enterprise)
    {
        if(App::getLocale()=='en')
        {
            $request->validate([
                'name_en' => 'string',
            ]);


            $enterprise->update([
                'name' => $request->name_en

            ]);



        }

        if(App::getLocale()=='ar')
        {
            $request->validate([
                'name_ar' => 'string',
            ]);


            $enterprise->update([
                'name_ar' => $request->name_ar

            ]);



        }

        if(App::getLocale()=='fr')
        {
            $request->validate([
                'name_fr' => 'string',
            ]);


            $enterprise->update([
                'name_fr' => $request->name_fr

            ]);



        }



        return redirect()->route('admin.enterprises.index')
                        ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enterprise $enterprise)
    {

        $enterprise->delete();
        return redirect()->route('admin.enterprises.index')
                        ->with('success','User deleted successfully');
    }
}