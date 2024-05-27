<?php

namespace App\Models;

use App\Models\Country;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name_en',
        'name_ar',
        'name_fr',
        'email',
        'age',
        'country_id',
        'state_id',
        'city_id',
        'national_id',
        'phone',
        'specialty_id',
        'subspecialty_id',
        'description_en',
        'description_ar',
        'description_fr',
        'image',

    ];

    public function country()
    {
        return $this->belongsTo(Country::class,'country_id','id');
    }

    public function state()
    {
        return $this->belongsTo(State::class,'state_id','id');
    }

    public function city()
    {
        return $this->belongsTo(City::class,'city_id','id');
    }

    public function specialty()
    {
        return $this->belongsTo(Specialty::class,'specialty_id','id');
    }

    public function subspecialty()
    {
        return $this->belongsTo(Subspecialty::class,'subspecialty_id','id');
    }



}