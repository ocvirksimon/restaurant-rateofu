<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RestaurantMeal extends Model
{
    protected $fillable = [
        'name',
        'type',
        'price',
    ];
}
