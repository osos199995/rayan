@extends('layouts.front')


@section('styles')

@stop



@section('content')
    <!-- Section -->
    <section class="page-section" style="padding:0; margin-bottom:50px;">
        <div class="container relative">

            <div class="row">



                <!-- Content -->
                <div class="col-md-12">


                    <!-- Shop options -->
                    <div class="clearfix mb-40 mt-40">
                        <hr/>


{{--                        <div class="left">--}}
{{--                            <form method="post" action="#" class="form">--}}
{{--                                <select class="input-md round">--}}
{{--                                    <option>فرز تلقائي</option>--}}
{{--                                    <option>فرز بالسعر : الارخص الي الأغلي</option>--}}
{{--                                    <option>فرز بالسعر : الأغلي الي الارخص</option>--}}
{{--                                </select>--}}
{{--                            </form>--}}
{{--                        </div>--}}

                    </div>
                    <!-- End Shop options -->


                    <div class="row multi-columns-row">
@foreach ($bests as $best)


                        <!-- Shop Item -->
                        <div class="col-md-4 col-lg-4 mb-60 mb-xs-40">
                            <div class="items_div">

                                <div class="post-prev-img">
@foreach(json_decode($best->images) as $image)

    @if ($image)
                                            <a href="#"><img src="{{Voyager::image($image)}}" alt="" /></a>
   @break
    @endif

@endforeach
                                    <div class="intro-label">
                                        <span class="label label-danger bg-red">{{$best->price}}</span>
                                    </div>

                                </div>

                                <div class="post-prev-title font-alt align-center">
                                    <a href="#">{{$best->name}}</a>
                                </div>

                                <div class="post-prev-text align-center">
                                    <p>{{str_limit($best->description,30).'..'}}</p>
                                </div>

                                <div class="post-prev-more align-center">
                                    <a href="{{route('book',[$best->id])}}" class="btn btn-mod btn-round"><i class="fa fa-shopping-cart"></i> اطلب الان</a>
                                </div>

                            </div>

                        </div>
                        <!-- End Shop Item -->

    @endforeach



                    </div>


                </div>
                <!-- End Content -->
                {{ $bests->links() }}
            </div>

        </div>
    </section>
    <!-- End Section -->
@stop


@section('footer')

@stop


@section('script')

@stop