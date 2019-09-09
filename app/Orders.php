<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable=([
        'name',
        'email',
        'phone',
        'code',
        'product_name',
        'qty',
    ]);
}
