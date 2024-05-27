<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data =  Setting::get();
    //    return view('dashboard.setting.all', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.setting.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        if(\Illuminate\Support\Facades\App::getLocale()=='en')
        {
            $request->validate([
                'address_en' => 'required|string',
                'description_en' => 'required|string',
                'email' => 'required|email',
                'facebook' => 'required|string',
                'instagram' => 'required|string',
                'twitter' => 'required|string',
                'phone' => 'required|string',
                'logo_en' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',


            ]);
            $requested_data = $request->except('logo_en');

            if ($request->file('logo_en'))
            {
                $imageName  = uniqid(). $request->file('logo_en')->getClientOriginalName();
                Image::make($request->file('logo_en'))->resize(442,null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('uploads/setting_en/' . $imageName );
                $requested_data['logo_en'] = $imageName;

            }

            Setting::create($requested_data);

            return redirect()->route('admin.main');



        }


        if(\Illuminate\Support\Facades\App::getLocale()=='fr')
        {
            $request->validate([
                'address_fr' => 'required|string',

                'description_fr' => 'required|string',

                'email' => 'required|email',
                'facebook' => 'required|string',
                'instagram' => 'required|string',
                'twitter' => 'required|string',
                'phone' => 'required|string',
                'logo_fr' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',


            ]);
            $requested_data = $request->except('logo_fr');

            if ($request->file('logo_fr'))
            {
                $imageName  = uniqid(). $request->file('logo_fr')->getClientOriginalName();
                Image::make($request->file('logo_fr'))->resize(442,null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('uploads/setting_fr/' . $imageName );
                $requested_data['logo_fr'] = $imageName;

            }

            Setting::create($requested_data);

            return redirect()->route('admin.main');


        }



        if(\Illuminate\Support\Facades\App::getLocale()=='ar')
        {
            $request->validate([
                'address_ar' => 'required|string',

                'description_ar' => 'required|string',

                'email' => 'required|email',
                'facebook' => 'required|string',
                'instagram' => 'required|string',
                'twitter' => 'required|string',
                'phone' => 'required|string',
                'logo_ar' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',


            ]);
            $requested_data = $request->except('logo_ar');

            if ($request->file('logo_ar'))
            {
                $imageName  = uniqid(). $request->file('logo_ar')->getClientOriginalName();
                Image::make($request->file('logo_ar'))->resize(442,null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('uploads/setting_ar/' . $imageName );
                $requested_data['logo_ar'] = $imageName;

            }

            Setting::create($requested_data);

            return redirect()->route('admin.main');



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
    public function edit(Setting $setting)
    {
        return view('dashboard.setting.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {

        if(\Illuminate\Support\Facades\App::getLocale()=='en')
        {
            $request->validate([
                'address_en' => 'string',

                'description_en' => 'string',

                'email' => 'email',
                'facebook' => 'string',
                'instagram' => 'string',
                'twitter' => 'string',
                'phone' => 'string',
                'logo_en' => 'image|mimes:jpeg,jpg,png,gif|max:2048',


            ]);
            $requested_data = $request->except('logo_en');

            if ($request->file('logo_en'))
            {
                $imageName  = uniqid(). $request->file('logo_en')->getClientOriginalName();
                Image::make($request->file('logo_en'))->resize(442,null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('uploads/setting_en/' . $imageName );
                Storage::disk('public_uploads')->delete("/setting_en/$setting->logo_en");
                $requested_data['logo_en'] = $imageName;

            }

            $setting->update($requested_data);

            return redirect()->route('admin.setting.index');


        }


        if(\Illuminate\Support\Facades\App::getLocale()=='fr')
        {
            $request->validate([
                'address_fr' => 'string',

                'description_fr' => 'string',

                'email' => 'email',
                'facebook' => 'string',
                'instagram' => 'string',
                'twitter' => 'string',
                'phone' => 'string',
                'logo_fr' => 'image|mimes:jpeg,jpg,png,gif|max:2048',


            ]);
            $requested_data = $request->except('logo_fr');

            if ($request->file('logo_fr'))
            {
                $imageName  = uniqid(). $request->file('logo_fr')->getClientOriginalName();
                Image::make($request->file('logo_fr'))->resize(442,null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('uploads/setting_fr/' . $imageName );
                Storage::disk('public_uploads')->delete("/setting_fr/$setting->logo_fr");

                $requested_data['logo_fr'] = $imageName;

            }

            $setting->update($requested_data);

            return redirect()->route('admin.setting.index');


        }



        if(\Illuminate\Support\Facades\App::getLocale()=='ar')
        {
            $request->validate([
                'address_ar' => 'string',

                'description_ar' => 'string',

                'email' => 'email',
                'facebook' => 'string',
                'instagram' => 'string',
                'twitter' => 'string',
                'phone' => 'string',
                'logo_ar' => 'image|mimes:jpeg,jpg,png,gif|max:2048',


            ]);
            $requested_data = $request->except('logo_ar');

            if ($request->file('logo_ar'))
            {
                $imageName  = uniqid(). $request->file('logo_ar')->getClientOriginalName();
                Image::make($request->file('logo_ar'))->resize(442,null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('uploads/setting_ar/' . $imageName );
                Storage::disk('public_uploads')->delete("/setting_ar/$setting->logo_ar");

                $requested_data['logo_ar'] = $imageName;

            }

            $setting->update($requested_data);

            return redirect()->route('admin.setting.index');


        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        if(\Illuminate\Support\Facades\App::getLocale()=='ar')
        {
            Storage::disk('public_uploads')->delete("/setting_ar/$setting->logo_ar");
        $setting->delete();
        return redirect()->route('admin.setting.index');

        }
        if(\Illuminate\Support\Facades\App::getLocale()=='en')
        {
            Storage::disk('public_uploads')->delete("/setting_en/$setting->logo_en");
        $setting->delete();
        return redirect()->route('admin.setting.index');

        }
        if(\Illuminate\Support\Facades\App::getLocale()=='fr')
        {
            Storage::disk('public_uploads')->delete("/setting_fr/$setting->logo_fr");
        $setting->delete();
        return redirect()->route('admin.setting.index');

        }


    }
}