<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Specialty;
use App\Models\Subspecialty;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpecialtiesController extends Controller
{
    public function index()
    {
        $data['specialties'] = Specialty::get(["name", "id"]);
        return view('dashboard.specialties.all', $data);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function fetchState(Request $request)
    {

        $data['subspecialties'] = Subspecialty::where("specialty_id", $request->specialty_id)
                                ->get(["name", "id"]);




        return response()->json($data);
    }
}
