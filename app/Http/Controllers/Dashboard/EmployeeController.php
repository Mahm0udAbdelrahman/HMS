<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Country;
use App\Models\Employee;
use App\Models\specialty;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Employee::all();

        return view('dashboard.employees.all',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::all();
        $specialties = Specialty::all();

        return view('dashboard.employees.add',compact('countries','specialties'));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(\Illuminate\Support\Facades\App::getLocale()=='en')
        {
            $request->validate([
                "country_id" => 'required|string',
                "state_id" => 'required|string',
                "city_id" => 'required|string',
                'specialty_id'=> 'required|string',
                'subspecialty_id' => 'required|string',
                'name_en' => 'required|string',
                'description_en' => 'required|string',
                'phone' => 'required|string',
                'email' => 'required|email',
                'age' => 'required|string',
                'national_id' => 'required|string',
                'image' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',







            ]);
            $requested_data = $request->except('image');

            if ($request->file('image'))
            {
                $imageName  = uniqid(). $request->file('image')->getClientOriginalName();
                Image::make($request->file('image'))->resize(442,null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('uploads/employee/' . $imageName );
                $requested_data['image'] = $imageName;

            }

            Employee::create($requested_data);

            // return redirect()->route('admin.main');

            return redirect()->route('admin.employees.index')
            ->with('success','employee created successfully');




        }
        if(\Illuminate\Support\Facades\App::getLocale()=='ar')
        {
            $request->validate([
                "country_id" => 'required|string',
                "state_id" => 'required|string',
                "city_id" => 'required|string',
                'specialty_id'=> 'required|string',
                'subspecialty_id' => 'required|string',
                'name_ar' => 'required|string',
                'description_ar' => 'required|string',
                'phone' => 'required|string',
                'email' => 'required|email',
                'age' => 'required|string',
                'national_id' => 'required|string',
                'image' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',







            ]);
            $requested_data = $request->except('image');

            if ($request->file('image'))
            {
                $imageName  = uniqid(). $request->file('image')->getClientOriginalName();
                Image::make($request->file('image'))->resize(442,null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('uploads/employee/' . $imageName );
                $requested_data['image'] = $imageName;

            }

            Employee::create($requested_data);

            // return redirect()->route('admin.main');

            return redirect()->route('admin.employees.index')
            ->with('success','employee created successfully');




        }
        if(\Illuminate\Support\Facades\App::getLocale()=='fr')
        {
            $request->validate([
                "country_id" => 'required|string',
                "state_id" => 'required|string',
                "city_id" => 'required|string',
                'specialty_id'=> 'required|string',
                'subspecialty_id' => 'required|string',
                'name_fr' => 'required|string',
                'description_fr' => 'required|string',
                'phone' => 'required|string',
                'email' => 'required|email',
                'age' => 'required|string',
                'national_id' => 'required|string',
                'image' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',







            ]);
            $requested_data = $request->except('image');

            if ($request->file('image'))
            {
                $imageName  = uniqid(). $request->file('image')->getClientOriginalName();
                Image::make($request->file('image'))->resize(442,null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('uploads/employee/' . $imageName );
                $requested_data['image'] = $imageName;

            }

            Employee::create($requested_data);

            // return redirect()->route('admin.main');

            return redirect()->route('admin.employees.index')
            ->with('success','employee created successfully');




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
    public function destroy(Employee $employee)
    {
        Storage::disk('public_uploads')->delete("/employee/$employee->image");
        $employee->delete();
        return redirect()->route('admin.employees.index');
    }
}