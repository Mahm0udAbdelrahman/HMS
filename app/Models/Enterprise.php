<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_en',
        'name_ar',
        'name_fr'
    ];

    public function Subscriptions()
    {
        return  $this->hasMany(Subscription::class,'enterprise_id','id');
    }
}