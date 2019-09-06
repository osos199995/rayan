<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FilterController extends Controller
{
      public function generalFilter( Request $request)
        {
            $request->validate([
                'min'=>'required|numeric',
                'max'=>'required|numeric',
            ]);

            $max=$request->input('max');
            $min=$request->input('min');



            $query=Product::query();
            $query->where('price','>=',$min)->where('price','<=',$max);

           $products= $query->paginate(9);
            return view('filter',compact('products'));
        }
}
