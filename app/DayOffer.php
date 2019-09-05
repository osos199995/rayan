<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DayOffer extends Model
{
    protected $fillable=([
        'name',
        'price',
        'size',
        'color',
        'brand',
        'description',
        'code',
        'review',
        'images',

    ]);
}
