<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specialty extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name'
    ];


    public function employess()
    {
        return $this->hasMany(Employee::class,'specialty_id','id');
    }
}