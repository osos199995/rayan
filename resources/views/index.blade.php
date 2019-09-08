@extends('layouts.front')

@section('styles')

@stop



@section('content')
    <!-- Section -->
    <section class="page-section" style="padding:0; margin-bottom:50px;">
        <div class="container relative">

            <div class="row">

                <!-- Sidebar -->
                <div class="col-sm-4 col-md-3 sidebar">


                    <div class="widget">

                        <h5 class="widget-title font-alt">عرض اليوم</h5>

                        <div class="widget-body">
                            @foreach(json_decode($dayoffer->images) as $image)
                                @if ($image)
                                    <a href="#"> <img src="{{Voyager::image($image)}}" /> </a>
                                    @break
                                @endif

                            @endforeach
                            <a href="{{route('dayoffer_details',$dayoffer->id)}}"> <h4>{{$dayoffer->name}}</h4> </a>
                            <a href="#" style="height: 75px; line-height: 75px;">
                                <span class="btn btn-mod btn-block "><i class="fa fa-shopping-cart"></i> اطلب الان  </span>
                            </a>


                        </div>
                    </div>


@auth



                    <!-- Widget -->
                    <div class="widget">

                        <h5 class="widget-title font-alt">مشتريات</h5>
                        @foreach ($savedproducts as $savedproduct)
                        <div class="widget-body">
                            <ul class="clearlist widget-posts">

                                <!-- Preview item -->
                                <li class="clearfix">


                                    @foreach(json_decode($savedproduct->product->images) as $iamge)

                                        @if ($image)


                                            <a href=""><img src="{{Voyager::image($image)}}" alt="" class="widget-posts-img" /></a>

                                        @endif
                                        @break

@endforeach


                                    <div class="widget-posts-descr">
                                        <a href="#">{{$savedproduct->product_name}}</a>
                                        <div>
                                            {{$savedproduct->price}} ريال
                                        </div>
                                        <div>
{{--                                <a href="{{route('unsaved',[$savedproduct->id])}}"><i class="fa fa-times"></i> حذف</a>--}}
                                        </div>
                                        {!! Form::open(['method'=>'DELETE','action'=>['SavedController@destroy',$savedproduct->product_id],'files'=>true]) !!}
                                        <input type="hidden" name="product_id" value="{{$savedproduct->product_id}}">
                                        <button  type="submit" style="border: 0px; margin: 0px; background: #ffffff"> <span class="wish-icon"><i class="fa fa-times"></i></span></button>
                                        {!! Form::close() !!}
                                    </div>
                                </li>
                                <!-- End Preview item -->



                            </ul>



                            <div>

                            </div>

                        </div>
                            <!-- End Widget -->
                            @endforeach
                    </div>

@endauth
                    <!-- Widget -->
                    <div class="widget">

                        <h5 class="widget-title font-alt">بحث بالسعر</h5>

                        <div class="widget-body">
                            {!! Form::open(['method'=>'get','action'=>['FilterController@generalFilter']]) !!}

                                <div class="row mb-20">
                                    <div class="col-xs-6">
                                        <input type="text" name="min" id="price-from" class="input-md round form-control" placeholder="من, ريال" maxlength="100">
                                    </div>

                                    <div class="col-xs-6">
                                        <input type="text" name="max" id="price-to" class="input-md round form-control" placeholder="الي, ريال" maxlength="100">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-mod btn-medium btn-full btn-round">تصفية</button>

                            {!! Form::close() !!}

                        </div>

                    </div>
                    <!-- End Widget -->

                    <!-- Widget -->
                    <div class="widget">

                        <h5 class="widget-title font-alt">أفضل العروض</h5>

                        <div class="widget-body">
                            <ul class="clearlist widget-posts">

                                @foreach($bestoffers as $bestoffer)
                                <!-- Preview item -->
                                <li class="clearfix">
                                    @foreach(json_decode($bestoffer->images) as $image)
                                        @if ($image)
                                            <a href=""><img src="{{voyager::image($image)}}" alt="" class="widget-posts-img" /></a>
                                            @break
                                        @endif

                                    @endforeach
                                    <div class="widget-posts-descr">
                                        <a href="{{route('best_offer_details',$bestoffer->id)}}">{{$bestoffer->name}}</a>
                                        <div>
                                             {{$bestoffer->price}}
                                        </div>
                                        <div>
@if ($bestoffer->review == 1)
            <i class="fa fa-star" style="color: #ffcd00;"></i>

    @elseif($bestoffer->review == 2)
        <i class="fa fa-star" style="color: #ffcd00;"></i>
        <i class="fa fa-star" style="color: #ffcd00;"></i>

    @elseif($bestoffer->review == 3)
        <i class="fa fa-star" style="color: #ffcd00;"></i>
        <i class="fa fa-star" style="color: #ffcd00;"></i>
        <i class="fa fa-star" style="color: #ffcd00;"></i>


    @elseif($bestoffer->review == 4)
        <i class="fa fa-star" style="color: #ffcd00;"></i>
        <i class="fa fa-star" style="color: #ffcd00;"></i>
        <i class="fa fa-star" style="color: #ffcd00;"></i>
        <i class="fa fa-star" style="color: #ffcd00;"></i>

    @elseif($bestoffer->review == 5)
        <i class="fa fa-star" style="color: #ffcd00;"></i>
        <i class="fa fa-star" style="color: #ffcd00;"></i>
        <i class="fa fa-star" style="color: #ffcd00;"></i>
        <i class="fa fa-star" style="color: #ffcd00;"></i>
        <i class="fa fa-star" style="color: #ffcd00;"></i>
    @endif





                                        </div>
                                    </div>
                                </li>
                                <!-- End Preview item -->
                                @endforeach


                            </ul>
                        </div>

                    </div>
                    <!-- End Widget -->





                </div>
                <!-- End Sidebar -->


                <!-- Content -->
                <div class="col-sm-9">

                    <div class="row mb-50 mt-50">
@foreach($products as $product)
                        <div class="col-sm-6">
                            <h3 class="blog-item-title font-alt mb-10"><a href="#">{{$product->category->name}}</a></h3>
                            <hr class="mt-0 mb-30">
                            <!-- Item -->
                            <div style="margin-bottom:20px;">

                                <div class="post-prev-img">
@foreach(json_decode($product->images) as $image)
    @if ($image)
                                            <a href="#"><img src="{{ Voyager::image($image) }}" alt="sada"></a>
@break
                                        @endif
                                    @endforeach



                                    <div class="intro-label">
                                        <span class="label label-danger bg-red">{{$product->price}}</span>

                                    </div>


                                </div>

                                <div class="post-prev-title font-alt align-center">
                                    <a href="#">{{$product->name}}</a>

                                </div>

                                <div class="post-prev-text align-center">
                                    <p>{{$product->description}}</p>
                                </div>

                                <div class="post-prev-more align-center">
                                    <a href="#" class="btn btn-mod  btn-round"><i class="fa fa-shopping-cart"></i> اطلب الان </a>
                                </div>

                            </div>
                            <!-- End Item -->


{{--                       --}}

                        </div>
@endforeach


                    </div>


                    <!-- Shop options -->
                    <div class="clearfix mb-40 mt-40">
                        <hr/>
                        <div class="right section-text mt-10">
                            <h4>
                                كل المنتجات
                            </h4>
                        </div>

                        <div class="left">
   {!! Form::open(['method'=>'get','action'=>['ProductController@sortPriceDown']]) !!}
                            <input type="submit" value="فرز بالسعر الاعلى الى الاقل" class="btn-danger">
                            {!! Form::close() !!}
                            {!! Form::open(['method'=>'get','action'=>['ProductController@sortPriceUp']]) !!}
                            <input type="submit" class="btn-info" value="فرز بالسعر الاقل الى الاعلى">



                            {!! Form::close() !!}
                        </div>




                    </div>

                    <!-- End Shop options -->


                    <div class="row multi-columns-row">
@foreach($allproducts as $product)
                        <!-- Shop Item -->
                        <div class="col-md-4 col-lg-4 mb-60 mb-xs-40">
                            <div class="items_div">

                                <div class="post-prev-img">
@foreach (json_decode($product->images) as $image)
                                        @if ($image)

                                    <a href="{{route('product',$product->id)}}"><img src="{{Voyager::image($image)}}" alt="" /></a>
                                        @break
                                        @endif
                                    @endforeach
                                    <div class="intro-label">
                                        <span class="label label-danger bg-red">{{$product->price}}</span>
                                    </div>

                                </div>

                                <div class="post-prev-title font-alt align-center">
                                    <a href="{{route('product',$product->id)}}">{{$product->name}}</a>
                                    @auth
                                    @include('partials.favourite',['product_id'=>$product->id])
@endauth
                                </div>

                                <div class="post-prev-text align-center">
                                    <p>{{$product->desription}}</p>
                                </div>

                                <div class="post-prev-more align-center">
                                    <a href="#" class="btn btn-mod btn-round"><i class="fa fa-shopping-cart"></i> اطلب الان</a>
                                </div>

                            </div>

                        </div>
                        <!-- End Shop Item -->
@endforeach
                    </div>

{{--                    {{ $allproducts->links() }}--}}

                </div>
                <!-- End Content -->

            </div>

        </div>
    </section>
    <!-- End Section -->
@stop


@section('footer')

@stop

@section('script')

@stop