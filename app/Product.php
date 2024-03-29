<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
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
'category_id',
'best_offer',
    ]);


    public  function category(){
        return $this->belongsTo('App\Category','category_id');
    }

}
