<?php

namespace Database\Seeders;

use App\Models\Specialty;
use App\Models\Subspecialty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specialty = Specialty::create(['name' => 'Bones']);

        $subspecialty = Subspecialty::create(['specialty_id' => $specialty->id, 'name' => 'Back bone']);



        /*------------------------------------------
        --------------------------------------------
        India Country Data
        --------------------------------------------
        --------------------------------------------*/

        $specialty = Specialty::create(['name' => 'surgery']);


        $subspecialty = Subspecialty::create(['specialty_id' => $specialty->id, 'name' => 'General Surgery']);



        $specialty = Specialty::create(['name' => 'children']);


        $subspecialty = Subspecialty::create(['specialty_id' => $specialty->id, 'name' => 'new born']);
        $subspecialty = Subspecialty::create(['specialty_id' => $specialty->id, 'name' => 'old born']);




    }
}