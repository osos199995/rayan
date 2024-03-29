<!DOCTYPE html>
<html dir="rtl">
<head>
    <title>{{setting('site.title')}}</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="author" content="Roman Kirichik">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('front_assets/images/favicon.png')}}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('front_assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/style-responsive.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/vertical-rhythm.min.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/custom.css')}}">
    <script type="text/javascript" src="{{asset('front_assets/js/jquery-1.11.2.min.js')}}"></script>

    <script src="https://use.fontawesome.com/e02e8b858c.js"></script>

{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
{{--<style>--}}
{{--    ul{--}}
{{--        list-style-type: none;--}}
{{--    }--}}
{{--    li {--}}
{{--        display: inline-block;--}}
{{--    }--}}
{{--</style>--}}


</head>



@yield('styles')

<body class="appear-animate">

<body class="appear-animate">

<!-- Page Loader -->
<div class="page-loader">
    <div class="loader">Loading...</div>
</div>
<!-- End Page Loader -->

<!-- Page Wrap -->
<div class="page" id="top">

    <div class="top-bar dark">
        <div class="container clearfix">

            <!-- Top Links -->
            <ul class="top-links right">
                @if (Auth::user())
{{--                    <li><a href="{{route('logout')}}">تسجيل خروج</a></li>--}}
                @endif
                @guest
                 <li><a href="{{route('login')}}">تسجيل دخول</a></li>
                        <li><a href="{{route('register')}}">حساب جديد</a></li>
                    @endguest



                    @auth
                   <li><a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                           {{ __('الخروج من الحساب') }}
                       </a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                        @endauth
            </ul>
            <!-- End Top Links -->

            <!-- Social Links -->
            <ul class="top-links left tooltip-bot" data-original-title="" title="">
                <li><a href="{{setting('site.face_book')}}" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="{{setting('site.twitter')}}" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="{{setting('site.behance')}}" title="" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
            </ul>
            <!-- End Social Links -->

        </div>
    </div>


    <div id="sticky-wrapper" class="sticky-wrapper" style="height: 75px;">

{{--        <nav class="main-nav js-stick" style="">--}}
{{--            <div class="container relative clearfix">--}}
{{--                <!-- Logo ( * your text or image into link tag *) -->--}}
{{--                <div class="nav-logo-wrap local-scroll">--}}
{{--                    <a href="{{route('/')}}" class="logo">--}}
{{--                        <img src="{{Voyager::image(setting('site.logo'))}}" alt="">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="mobile-nav" style="height: 75px; line-height: 75px; width: 75px;">--}}
{{--                    <i class="fa fa-bars"></i>--}}
{{--                </div>--}}
{{--                <!-- Main Menu -->--}}



{{--                <div class="inner-nav desktop-nav">--}}

{{--                    <ul class="clearlist scroll-nav local-scroll">--}}

{{--                        <li class="active"><a href="{{route('/')}}" style="height: 75px; line-height: 75px;">الرئيسية</a></li>--}}
{{--                        <li><a href="{{route('best_offer')}}" style="height: 75px; line-height: 75px;">افضل العروض</a></li>--}}
{{--                        @foreach($categories as $category)--}}
{{--                        <li><a href="{{route('categories',$category->id)}}" style="height: 75px; line-height: 75px;">الاقسام</a></li>--}}



{{--                        <div class="dropdown">--}}
{{--                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">--}}
{{--                              الاقسام--}}
{{--                                <span class="caret"></span>--}}
{{--                            </button>--}}
{{--                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">--}}
{{--                                @foreach($categories as $category)--}}
{{--                                <li role="presentation"><a role="menuitem" tabindex="-1" href="{{route('categories',$category->id)}}">{{$category->name}}</a></li>--}}

{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}

{{--                        <li><a href="#" style="height: 75px; line-height: 75px;">الخدمات</a></li>--}}
{{--                        <li><a href="#" style="height: 75px; line-height: 75px;">المتجر</a></li>--}}
{{--                        <li><a href="#" style="height: 75px; line-height: 75px;">المعرض</a></li>--}}
{{--                        <li><a href="#" style="height: 75px; line-height: 75px;">تواصل معنا</a></li>--}}
{{--                        <li>--}}
{{--                            <!-- End Sub -->--}}

{{--                        </li>--}}
{{--                        <!-- End Button -->--}}

{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="nav-logo-wrap local-scroll">
                    <a href="{{route('/')}}" class="logo">
                        <img src="{{Voyager::image(setting('site.logo'))}}" alt="">
                    </a>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
{{--                    <a class="navbar-brand" href="{{route('/')}}">الريان</a>--}}
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{route('/')}}">الرئيسية <span class="sr-only">(current)</span></a></li>
                        <li><a href="{{route('best_offer')}}"> افضل العروض</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">الاقسام <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @foreach($categories as $category)
                                <li><a href="{{route('categories',$category->id)}}">{{$category->name}}</a></li>
@endforeach
                            </ul>
                        </li>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

    </div>
    <!-- Head Section -->
    <section class="small-section" style="background: #e63b03;padding: 20px 0;">
        <div class="relative container align-right">

            <div class="row">

                <div class="col-md-3">
                    <i class="fa fa-headphones ico_contct"></i> <a href="tel:0114985184" class="link_contct">{{setting('site.phone')}}</a>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-envelope-o ico_contct"></i> <a href="{{setting('site.website_link')}}" class="link_contct">{{setting('site.website_link')}}</a>
                </div>
                <div class="col-md-6">
                    {!! Form::open(['method'=>'GET','action'=>'SearchController@search','class'=>'navbar-form navbar-left','role'=>'search'])  !!}

                    <div class="search-wrap">
                            <button class="search-button animate" type="submit" title="Start Search">
                                <i class="fa fa-search"></i>
                            </button>
                            <input  name="search" type="text" class="form-control search-field" placeholder="ما الذي تبحث عنه ؟">
                        </div>
                    {!! Form::close() !!}
                </div>

            </div>

        </div>
    </section>
    <!-- End Head Section -->










</div>
<!-- End Page Wrap -->




</body>


@yield('content')


<!-- Foter -->
<footer class="small-section bg-gray-lighter footer pb-60">
    <div class="container">
        <div class="row align-right">

            <!-- Widget -->
            <div class="col-sm-6 col-md-3">
                <div class="widget">

                    <h5 class="widget-title font-alt">خدمة العملاء</h5>

                    <div class="widget-body">
                        <div class="widget-text clearfix">

                            <ul class="clearlist widget-menu">
                                <li>
                                    <a href="{{route('help_center')}}" title="">مركز المساعدة  </a>
                                </li>
                                <li>
                                    <a href="{{route('how_buy')}}" title="">كيفية عمل طلب شراء  </a>
                                </li>
                                <li>
                                    <a href="{{route('policies')}}" title="">سياسة الشحن  </a>
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
            <!-- End Widget -->

            <!-- Widget -->
            <div class="col-sm-6 col-md-3">
                <div class="widget">

                    <h5 class="widget-title font-alt">من نحن</h5>

                    <div class="widget-body">
                        <ul class="clearlist widget-menu">
                            <li>
                                <a href="{{route('join_us')}}" title="">انضم الينا </a>
                            </li>
                            <li>
                                <a href="{{route('conditions')}}" title="">الشروط والأحكام</a>
                            </li>
                            <li>
                                <a href="{{route('privacy')}}" title="">سياسة الخصوصية</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- End Widget -->

            <!-- Widget -->
            <div class="col-sm-6 col-md-3">
                <div class="widget">

                    <h5 class="widget-title font-alt">البيع والشراء</h5>

                    <div class="widget-body">
                        <ul class="clearlist widget-menu">
                            <li>
                                <a href="{{route('buypolicy')}}" title="">سياسة البيع </a>
                            </li>
                            <li>
                                <a href="{{route('sailpolicy')}}" title=""> سياسة الشراء</a>
                            </li>
                            <li>
                                <a href="{{route('faq')}}" title=""> الأسئلة الشائعة</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- End Widget -->
            </div>
            <!-- End Widget -->

            <!-- Widget -->
            <div class="col-sm-6 col-md-3">
                <div class="widget">

                    <h5 class="widget-title font-alt">القوائم البريدية</h5>

                    <div class="widget-body">
                        <div class="widget-text clearfix">

                            {!! Form::open(['method'=>'post','action'=>'MailPost@store','files'=>true,'class'=>'left_form']) !!}

                                <div class="mb-20">ابق علي اتصال دائم لا تقلق لن نرسل لك سبام.</div>

                                <div class="mb-20">
                                    <input placeholder="ادخل البريد الالكتروني" class="form-control input-md round mb-10" type="email" pattern=".{5,100}" required="" name="email">
                                    <button type="submit" class="btn btn-mod btn-gray btn-medium btn-round form-control mb-xs-10">اشتراك</button>
                                </div>

                                <div id="subscribe-result"></div>
                            {!! Form::close()!!}

                        </div>
                    </div>

                </div>
            </div>
            <!-- End Widget -->

        </div>                    <!-- Divider -->
        <hr class="mt-0">
        <!-- End Divider -->

        <!-- Footer Text -->
        <div class="col-md-6">
            <div class="footer-text" style="text-align: right;">

                <!-- Copyright -->
                <div class="footer-copy font-alt">
                    <a href="#" target="_blank">© متجر مصنع الريان لمعدات المطاعم والمطابخ الالكتروني 2019.</a>.
                </div>
                <!-- End Copyright -->

            </div>
            <!-- End Footer Text -->
        </div>

    </div>

    <!-- Top Link -->
    <div class="local-scroll">
        <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
    </div>
    <!-- End Top Link -->

</footer>
<!-- End Foter -->


@yield('footer')


<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('front_assets/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('front_assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front_assets/js/SmoothScroll.js')}}"></script>
<script type="text/javascript" src="{{asset('front_assets/js/jquery.scrollTo.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front_assets/js/jquery.localScroll.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front_assets/js/jquery.viewport.mini.js')}}"></script>
<script type="text/javascript" src="{{asset('front_assets/js/jquery.countTo.js')}}"></script>
<script type="text/javascript" src="{{asset('front_assets/js/jquery.appear.js')}}"></script>
<script type="text/javascript" src="{{asset('front_assets/js/jquery.sticky.js')}}"></script>
<script type="text/javascript" src="{{asset('front_assets/js/jquery.parallax-1.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('front_assets/js/jquery.fitvids.js')}}"></script>
<script type="text/javascript" src="{{asset('front_assets/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front_assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front_assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Replace test API Key "AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg" with your own one below
**** You can get API Key here - https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg"></script>
<script type="text/javascript" src="{{asset('front_assets/js/gmap3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front_assets/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front_assets/js/masonry.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front_assets/js/jquery.simple-text-rotator.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front_assets/js/all.js')}}"></script>
<script type="text/javascript" src="{{asset('front_assets/js/contact-form.js')}}"></script>
<script type="text/javascript" src="{{asset('front_assets/js/jquery.ajaxchimp.min.js')}}"></script>
<!--[if lt IE 10]><script type="text/javascript" src="{{asset('front_assets/js/placeholder.js')}}"></script><![endif]-->

</body>
</html>
@yield('script')


