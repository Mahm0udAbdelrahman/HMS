<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Enterprise;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $enterprises = Enterprise::all();

       return view('dashboard\subscriptions\add' , compact('enterprises'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(\Illuminate\Support\Facades\App::getLocale()=='en')
        {
            $request->validate([
                "enterprise_id" => 'required|string',
                'name_en' => 'required|string',
                'address_en' => 'required|string',
                'description_en' => 'required|string',
                'email' => 'required|email',
                'facebook' => 'required|string',
                'instagram' => 'required|string',
                'twitter' => 'required|string',
                'phone' => 'required|string',
                'image' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',


            ]);
            $requested_data = $request->except('image');

            if ($request->file('image'))
            {
                $imageName  = uniqid(). $request->file('image')->getClientOriginalName();
                Image::make($request->file('image'))->resize(442,null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('uploads/subscription/' . $imageName );
                $requested_data['image'] = $imageName;

            }

            Subscription::create($requested_data);

            // return redirect()->route('admin.main');

            return redirect()->route('admin.subscriptions.create')
            ->with('success','Subscription created successfully');




        }


        if(\Illuminate\Support\Facades\App::getLocale()=='fr')
        {
            $request->validate([
                "enterprise_id" => 'required|string',
                'name_fr' => 'required|string',
                'address_fr' => 'required|string',

                'description_fr' => 'required|string',

                'email' => 'required|email',
                'facebook' => 'required|string',
                'instagram' => 'required|string',
                'twitter' => 'required|string',
                'phone' => 'required|string',
                'image' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',


            ]);
            $requested_data = $request->except('image');

            if ($request->file('image'))
            {
                $imageName  = uniqid(). $request->file('image')->getClientOriginalName();
                Image::make($request->file('image'))->resize(442,null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('uploads/subscription/' . $imageName );
                $requested_data['image'] = $imageName;

            }

            Subscription::create($requested_data);

            // return redirect()->route('admin.main');

            return redirect()->route('admin.subscriptions.create')
                        ->with('success','Subscription created successfully');


        }



        if(\Illuminate\Support\Facades\App::getLocale()=='ar')
        {
            $request->validate([
                "enterprise_id" => 'required|string',
                'address_ar' => 'required|string',

                'description_ar' => 'required|string',

                'email' => 'required|email',
                'facebook' => 'required|string',
                'instagram' => 'required|string',
                'twitter' => 'required|string',
                'phone' => 'required|string',
                'logo_ar' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',


            ]);
            $requested_data = $request->except('image');

            if ($request->file('image'))
            {
                $imageName  = uniqid(). $request->file('image')->getClientOriginalName();
                Image::make($request->file('image'))->resize(442,null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('uploads/subscription/' . $imageName );
                $requested_data['image'] = $imageName;

            }

            Subscription::create($requested_data);

            // return redirect()->route('admin.main');

            return redirect()->route('admin.subscriptions.create')
            ->with('success','Subscription created successfully');




        }


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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}