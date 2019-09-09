<?php

namespace App\Http\Controllers;

use App\DayOffer;
use App\Orders;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
    public function store(Request $request,$id)
    {
$product=Product::where('id',$id)->first();

        $request->validate([
            'name'=>'required|string',
            'email'=>'required|email',
            'phone'=>'required|numeric',
            'qty'=>'required|numeric',

        ]);

        $name=htmlentities(strip_tags($request->input('name')));
        $email=htmlentities(strip_tags($request->input('email')));
        $phone=htmlentities(strip_tags($request->input('phone')));
        $code=$product->code;
        $product_name=$product->name;
        $qty=htmlentities(strip_tags($request->input('qty')));

        Orders::create([
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone,
          'code'=>$code,
            'product_name'=>$product_name,
            'qty'=>$qty,
        ]);

        Session::flash('success',' تهانينا قد تم تقديم طلبك وسيتم التواصل معك قريبا');
        return redirect()->back();
    }

    public function storedayoffer(Request $request,$id)
    {

        $dayoffer=DayOffer::where('id',$id)->first();


        $request->validate([
            'name'=>'required|string',
            'email'=>'required|email',
            'phone'=>'required|numeric',
            'qty'=>'required|numeric',

        ]);

        $name=htmlentities(strip_tags($request->input('name')));
        $email=htmlentities(strip_tags($request->input('email')));
        $phone=htmlentities(strip_tags($request->input('phone')));
        $code=$dayoffer->code;
        $product_name=$dayoffer->name;
        $qty=htmlentities(strip_tags($request->input('qty')));

        Orders::create([
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone,
            'code'=>$code,
            'product_name'=>$product_name,
            'qty'=>$qty,
        ]);

        Session::flash('success','  تهانينا قد تم تقديم طلبك وسيتم التواصل معك قريبا');
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
        $product=Product::where('id',$id)->first();
        return view('book',compact('product'));
    }


    public function showdayoffer($id){
        $dayoffer=DayOffer::where('id',$id)->first();
        return view('bookdayoffer',compact('dayoffer'));
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
        //
    }
}
