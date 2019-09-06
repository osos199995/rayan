@extends('layouts.front')


@section('styles')

@stop

@section('content')
    <!-- End Shop options -->


    <div class="row multi-columns-row">
    @foreach($products as $product)
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
@stop


@section('footer')

@stop

@section('script')

@stop