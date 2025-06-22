<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'title',
        'price',
        'location',
        'type',
        'main_image',
        'category',
        'bedrooms',
        'bathrooms',
        'area',
    ];
}
