<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $request->validate([
            'search'=>'string'
        ]);
        $search=strip_tags($request->input('search'));
        $searchTerms = explode(' ', $search);
        $query = Product::query();
        foreach ($searchTerms as $searchTerm) {
            $query->Where('name', 'like', '%' . $searchTerm . '%')->orWhere('brand','like', '%' . $searchTerm . '%');

           }


        $products = $query->paginate(9);

        return view('search', compact('products'));
    }
}
