@extends('layouts.front')


@section('styles')
    
@stop



@section('content')
    <section class="page-section">
        <div class="container relative">

            <!-- Product Content -->
            <div class="row mb-60 mb-xs-30">

                <!-- Product Images -->
                <div class="col-md-4 mb-md-30">

                    <div class="post-prev-img">
                        @foreach (json_decode($product->images) as $image)
                            @if ($image)
                                <a href="images/shop/shop-prev-1.jpg" class="lightbox-gallery-3 mfp-image"><img src="{{Voyager::image($image)}}" alt=""></a>
                                @break
                            @endif

                        @endforeach

                        <div class="intro-label">
                            <span class="label label-danger bg-red">{{$product->price}}</span>
                        </div>
                    </div>

                    <div class="row">
@foreach(json_decode($product->images) as $image)


                        <div class="col-xs-3 post-prev-img">

                            <a href="{{Voyager::image($image)}}" class="lightbox-gallery-{{count(json_decode($product->images))}} mfp-image">

                            <img src="{{Voyager::image($image)}}" alt="" style="height: 80px"></a>


                        </div>

                     @endforeach

                    </div>

                </div>
                <!-- End Product Images -->

                <!-- Product Description -->
                <div class="col-sm-8 col-md-5 mb-xs-40">

                    <h3 class="mt-0">{{$product->name}}</h3>

                    <hr class="mt-0 mb-30">

                    <div class="row">
                        <div class="col-xs-6 lead mt-0 mb-20">


                            <strong>ريال{{$product->price}}</strong>

                        </div>
                        <div class="col-xs-6 align-left section-text">
                            <strong>تقييم المنتج</strong>
                            @if ($product->review == 1)
                                <i class="fa fa-star"></i>
                            @endif
                                @if ($product->review == 2)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                @endif
                                @if ($product->review == 3)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                @endif
                                @if ($product->review == 4)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>

                                @endif
                                @if ($product->review == 5)
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                @endif


                            &nbsp;
                        </div>
                    </div>

                    <hr class="mt-0 mb-30">

                    <div class="section-text mb-30">
                      {{$product->description}}
                    </div>

                    <hr class="mt-0 mb-30">

                    <div class="mb-30">
                        <form method="post" action="#" class="form">

                            <a href="{{route('book',[$product->id])}}" class="btn btn-mod btn-large btn-round">اطلب الان </a>
                        </form>
                    </div>

                    <hr class="mt-0 mb-30">

                    <div class="section-text small">
                        <div><strong>الكود:</strong>{{$product->code}}</div>
                        <div>تصنيف : <a href="">{{$product->category->name}}</a></div>

                    </div>

                </div>
                <!-- End Product Description -->

                <!-- Features -->
                <div class="col-sm-4 col-md-3 mb-xs-40">

                    <!-- Features Item -->
                    <div class="alt-service-wrap">
                        <div class="alt-service-item">
                            <div class="alt-service-icon">
                                <i class="fa fa-paper-plane-o"></i>
                            </div>
                            <h3 class="alt-services-title font-alt">{{setting('site.advertising_title_1')}}</h3>
                            {{setting('site.advertising_description_1')}}
                        </div>
                    </div>
                    <!-- End Features Item -->

                    <!-- Features Item -->
                    <div class="alt-service-wrap">
                        <div class="alt-service-item">
                            <div class="alt-service-icon">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <h3 class="alt-services-title font-alt">{{setting('site.advertising_title_2')}}</h3>
                            {{setting('site.advertising_description_2')}}
                        </div>
                    </div>
                    <!-- End Features Item -->

                    <!-- Features Item -->
                    <div class="alt-service-wrap">
                        <div class="alt-service-item">
                            <div class="alt-service-icon">
                                <i class="fa fa-gift"></i>
                            </div>
                            <h3 class="alt-services-title font-alt">{{setting('site.advertising_title_3')}}</h3>
                            {{setting('site.advertising_description_3')}}
                        </div>
                    </div>
                    <!-- End Features Item -->



                </div>
                <!-- End Features -->

            </div>
            <!-- End Product Content -->


            <!-- Nav tabs -->
            <ul class="nav nav-tabs tpl-tabs animate">
                <li class="active">
                    <a href="#one" data-toggle="tab">وصف</a>
                </li>
                <li>
                    <a href="#two" data-toggle="tab">خصائص</a>
                </li>

            </ul>
            <!-- End Nav tabs -->

            <!-- Tab panes -->
            <div class="tab-content tpl-tabs-cont">
                <div class="tab-pane fade in active" id="one">
                    <p>
                 {{$product->description}}
                    </p>

                </div>
                <div class="tab-pane fade" id="two">

                    <table class="table table-bordered table-striped">
                        <tbody><tr>
                            <th>
                                الخاصية
                            </th>
                            <th>
                                القيمة
                            </th>
                        </tr>
                        <tr>
                            <td>
                                الحجم
                            </td>
                            <td>
                                {{$product->size}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                اللون
                            </td>
                            <td>
                               {{$product->color}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                الماركة
                            </td>
                            <td>
                                {{$product->brand}}
                            </td>
                        </tr>
                        </tbody></table>

                </div>


            <!-- End Tab panes -->

        </div>
    </section>
@stop

@section('footer')
    
@stop


@section('script')
    
@stop