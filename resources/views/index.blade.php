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



{{--                    <!-- Widget -->--}}
{{--                    <div class="widget">--}}

{{--                        <h5 class="widget-title font-alt">مشتريات</h5>--}}

{{--                        <div class="widget-body">--}}
{{--                            <ul class="clearlist widget-posts">--}}

{{--                                <!-- Preview item -->--}}
{{--                                <li class="clearfix">--}}
{{--                                    <a href=""><img src="images/shop/shop-prev-1.jpg" alt="" class="widget-posts-img" /></a>--}}
{{--                                    <div class="widget-posts-descr">--}}
{{--                                        <a href="#">ماكينة غزل البنات وسط</a>--}}
{{--                                        <div>--}}
{{--                                            1250 ريال--}}
{{--                                        </div>--}}
{{--                                        <div>--}}
{{--                                            <a href=""><i class="fa fa-times"></i> حذف</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <!-- End Preview item -->--}}

{{--                                <!-- Preview item -->--}}
{{--                                <li class="clearfix">--}}
{{--                                    <a href=""><img src="images/shop/shop-prev-7.jpg" alt="" class="widget-posts-img" /></a>--}}
{{--                                    <div class="widget-posts-descr">--}}
{{--                                        <a href="#">سخان كريب كهرباء مدور دبل</a>--}}
{{--                                        <div>--}}
{{--                                            1000 ريال--}}
{{--                                        </div>--}}
{{--                                        <div>--}}
{{--                                            <a href=""><i class="fa fa-times"></i> حذف</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <!-- End Preview item -->--}}

{{--                            </ul>--}}

{{--                            <div class="clearfix mt-20">--}}

{{--                                <div class="right mt-10">--}}
{{--                                    الكل : <strong> 2250 ريال</strong>--}}
{{--                                </div>--}}

{{--                                <div class="left">--}}
{{--                                    <a href="#" class="btn btn-mod btn-border btn-small btn-round"> شاهد العربة </a>--}}
{{--                                </div>--}}

{{--                            </div>--}}

{{--                            <div>--}}

{{--                            </div>--}}

{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <!-- End Widget -->--}}

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
                            <input type="submit" value="فرز بالسعر الاعلى الى الاقل">
                            {!! Form::close() !!}
                            {!! Form::open(['method'=>'get','action'=>['ProductController@sortPriceUp']]) !!}
                            <input type="submit" value="فرز بالسعر الاقل الى الاعلى">



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

                                    <a href="#"><img src="{{Voyager::image($image)}}" alt="" /></a>
                                        @break
                                        @endif
                                    @endforeach
                                    <div class="intro-label">
                                        <span class="label label-danger bg-red">{{$product->price}}</span>
                                    </div>

                                </div>

                                <div class="post-prev-title font-alt align-center">
                                    <a href="{{route('product',$product->id)}}#">{{$product->name}}</a>
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