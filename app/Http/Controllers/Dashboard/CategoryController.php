<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Category::all();
        return view('dashboard.categories.all',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(App::getLocale()=='en')
        {
            $this->validate($request, [
                'name_en' => 'required|string',


            ]);


            Category::create([
                'name_en'=>$request->name_en,

            ]);
        }

        if(App::getLocale()=='ar')
        {
            $this->validate($request, [
                'name_ar' => 'required|string',


            ]);


            Category::create([
                'name_ar'=>$request->name_ar,

            ]);
        }


        if(App::getLocale()=='fr')
        {
            $this->validate($request, [
                'name_fr' => 'required|string',


            ]);


            Category::create([
                'name_fr'=>$request->name_fr,

            ]);
        }





        return redirect()->route('admin.categories.index')
                        ->with('success','User updated successfully');
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
    public function edit(Category $category)
    {
        return view('dashboard.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        if(App::getLocale()=='en')
        {
            $this->validate($request, [
                'name_en' => 'string'

            ]);


            $category->update([
                'name_en' =>$request->name_en,
            ]);

        }
        if(App::getLocale()=='ar')
        {
            $this->validate($request, [
                'name_ar' => 'string'

            ]);


            $category->update([
                'name_ar' =>$request->name_ar,
            ]);

        }

        if(App::getLocale()=='fr')
        {
            $this->validate($request, [
                'name_fr' => 'string'

            ]);


            $category->update([
                'name_fr' =>$request->name_fr,
            ]);

        }


        return redirect()->route('admin.categories.index')
                        ->with('success','category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {

        $category->delete();
        return redirect()->route('admin.categories.index')
                        ->with('success','category delete successfully');
    }
}