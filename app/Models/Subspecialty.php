<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subspecialty extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name',
        'specialty_id'
    ];



    public function employees()
    {
        return $this->hasMany(Employee::class,'subspecialty_id','id');
    }
}
