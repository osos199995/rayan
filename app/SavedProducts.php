<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SavedProducts extends Model
{

    protected $fillable=[
        'product_id',
        'user_id',
        'user_name',
        'product_name',
        'price'
    ];

    function product(){
        return $this->belongsTo('App\Product','product_id');
    }}
