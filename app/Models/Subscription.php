<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'enterprise_id',
        'name_en',
        'name_ar',
        'name_fr',



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



        'image'
     ];


     public function empterprise()
    {
        return    $this->belongsTo(Enterprise::class,'enterprise_id' ,'id');
    }


}