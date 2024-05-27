<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
       'address_ar',
       'address_en',
       'address_fr',

       'description_ar',
       'description_en',
       'description_fr',

       'email',


       'phone',


       'facebook_',


       'instagram',



       'twitter',



       'logo_ar',
       'logo_en',
       'logo_fr'
    ];

}
