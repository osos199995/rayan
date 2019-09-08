<?php

namespace App\Http\Controllers;

use App\Product;
use App\SavedProducts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SavedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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


//        $product=Product::find($request->input('product_id'))->first('name');
$product=Product::where('id',$request->input('product_id'))->first();
        $saved= SavedProducts::create([
            'user_id'=>Auth::id(),
            'product_id'=>$request->input('product_id'),
            'product_name'=>$product->name,
            'user_name'=>Auth::user()->name,
            'price'=>$product->price,

        ]);

        Session::flash('success','Product Added to saved products Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

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

        $saved= SavedProducts::where('user_id',Auth::id())->where('product_id',$id)->first();
        if($saved){
            $saved->delete();
            Session::flash('danger','product removed from saved products');
            return redirect()->back();
        }
        return redirect()->back();
    }

}
