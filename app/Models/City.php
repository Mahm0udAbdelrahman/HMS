<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'cities';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'state_id'
    ];


    public function employees()
    {
       return $this->hasMany(Employee::class,'city_id','id');
    }





}
