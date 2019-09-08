@extends('layouts.front')


@section('styles')
    
@stop

@section('content')
    <!-- Content -->
    <div class="col-sm-12">

        <div class="row multi-columns-row">

            <!-- Post Item -->
            <div class="col-md-12 col-lg-12 mb-60 mb-xs-40">

                <div class="post-prev-title font-alt">
                    <a href="">{{setting('site.terms_and_conditions_title')}}</a>
                </div>
                <hr>

                <div class="post-prev-text">
                  {{setting('site.terms_and_conditions_description')}}

                </div>


            </div>
            <!-- End Post Item -->


        </div>
    </div>
    <!-- End Content -->
@stop

@section('footer')
    
@stop


@section('script')
    
@stop