<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
            'title_ar',
            'title_en',
            'title_fr',
            'description_ar',
            'description_en',
            'description_fr',
            'image',
            'category_id',
   ];
}