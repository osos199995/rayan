@extends('layouts.front')

@section('styles')

@stop


@section('content')
    <section class="page-section">

        <div class="container-fluid content">
            <div class="row">


                <div class="col-md-8 profileContent"> <!-- Profile Content -->
                    <div class="col-md-12 profileContentPage">
                        <div class="heading col-md-12 text-right"> <!-- Heading -->
                            <h3> اكمل الطلب </h3>
                        </div> <!-- End Heading -->
                        <div class="col-md-12"> <!-- Form Profile -->

                            {!! Form::model($product,['method'=>'post','action'=>['BookController@store',$product->id],'files'=>true]) !!}

                                <div class="form-group"> <!-- Form Div -->
                                    <label class="label-control">الاسم بالكامل </label>
                                    <div>
                                        <input class="form-control" placeholder="الاسم بالكامل" required="" name="name" type="text" value="username">
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div> <!-- End Form Div -->

                                <div class="form-group"> <!-- Form Div -->
                                    <label class="label-control"> البريد الالكترونى </label>
                                    <div>
                                        <input class="form-control" placeholder="البريد الالكترونى" required="" name="email" type="email" value="mail@mail.com">
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div> <!-- End Form Div -->

                                <div class="form-group"> <!-- Form Div -->
                                    <label class="label-control">رقم الهاتف</label>
                                    <div>
                                        <input class="form-control" placeholder="" required="" name="phone" type="text" >
                                        @if ($errors->has('phone'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div> <!-- End Form Div -->

                                 <div class="form-group"> <!-- Form Div -->
                                <label class="label-control">كود المنتج</label>
                                <div>
                                    <input class="form-control" placeholder="" required="" name="code" type="text" value={{$product->code}} disabled>

                                </div>
                            </div> <!-- End Form Div -->

                                 <div class="form-group"> <!-- Form Div -->
                                <label class="label-control">اسم المنتج</label>
                                <div>
                                    <input class="form-control" placeholder="" required="" name="product_name" type="text" value={{$product->name}} disabled>
                                </div>
                            </div> <!-- End Form Div -->

                                  <div class="form-group"> <!-- Form Div -->
                                <label class="label-control">الكمية المطلوبة</label>
                                <div>
                                    <input class="form-control" type="number" placeholder="" required="" name="qty" type="text" value= >
                                    @if ($errors->has('qty'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('qty') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div> <!-- End Form Div -->



                            <div class="form-group text-center"> <!-- Form Div -->
                                    <input type="submit" class="submit_btn btn btn-mod btn-medium btn-round" value="ارسل الطلب">
                                </div> <!-- End Form Div -->
                            {!! Form::close() !!}
                        </div> <!-- End Form Profile -->
                    </div>
                </div> <!-- End Profile Content -->
            </div>
        </div>

    </section>
@stop


@section('footer')

@stop



@section('script')

@stop