<?php

$added=\App\SavedProducts::where('user_id',Auth::id())->where('product_id',$product_id)->count();

?>
@if($added==0)
    {!! Form::open(['method'=>'post','action'=>'SavedController@store','files'=>true]) !!}
    <input type="hidden" name="product_id" value="{{$product_id}}">

    <button style="border: 0px; margin: 0px; background: #ffffff" type="submit" > <span class="wish-icon"><i class="fa fa-heart-o"></i></span></button>

    {!! Form::close() !!}
@else
    {!! Form::open(['method'=>'DELETE','action'=>['SavedController@destroy',$product_id],'files'=>true]) !!}
    <input type="hidden" name="product_id" value="{{$product_id}}">
    <button  type="submit" style="border: 0px; margin: 0px; background: #ffffff"> <span class="wish-icon"><i class="fa fa-heart"></i></span></button>
    {!! Form::close() !!}
@endif