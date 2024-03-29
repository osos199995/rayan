<?php

namespace App\Http\Controllers;

use App\Category;
use App\DayOffer;
use App\Product;
use App\SavedProducts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

           $dayoffer=DayOffer::first();
     $products=Product::get()->take(2);
$savedproducts=SavedProducts::where('user_id',Auth::id())->get();
     $allproducts=Product::paginate(9);
     $bestoffers=Product::where('best_offer',1)->get()->take(5);
     return view('index',compact('products','allproducts','bestoffers','dayoffer','savedproducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $product=Product::find($id);
        return view('product-details',compact('product'));

    }

    public function sortPriceDown(){

        $savedproducts=SavedProducts::where('user_id',Auth::id())->get();

        $dayoffer=DayOffer::first();
        $products=Product::get()->take(2);
        $allproducts=Product::orderBy('price','ASC')->paginate(9);
//        dd($allproducts);
        $bestoffers=Product::where('best_offer',1)->get()->take(5);
return view('sortdown',compact('allproducts','dayoffer','products','bestoffers','savedproducts'));
    }

    public function sortPriceUp(){

        $savedproducts=SavedProducts::where('user_id',Auth::id())->get();

        $dayoffer=DayOffer::first();
        $products=Product::get()->take(2);

//        $allproducts=Product::all()->sortBy('price');
        $allproducts=Product::orderBy('price','DESC')->paginate(9);



        $bestoffers=Product::where('best_offer',1)->get()->take(5);
        return view('sortup',compact('allproducts','dayoffer','products','bestoffers','savedproducts'));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
