@extends('frontend.layouts.master')
@section('title','E-SHOP || HOME PAGE')
@section('main-content')

<div class="fixed-header-space"></div> <!-- empty placeholder div for Fixed Menu bar height-->

<!-- Start of Main Content Wrapper -->
<main id="content" class="main-content-wrapper">

<!-- Start of Slider with Banner Section -->
<section class="slider-with-banner">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                @if(count($banners)>0)
                <!-- Start of Primary Slider Section -->
                <div class="primary-slider-section mb0 pos-r">
                    <div id="primary_slider" class="swiper-container slider-type-4">

                        <!-- Slides -->
                        <div class="swiper-wrapper">

                            @foreach($banners as $key=>$banner)
                            <div class="swiper-slide bg-img-wrapper">
                                <div class="slide-inner image-placeholder">
                                    <img src="{{$banner->photo}}" class="visually-hidden" alt="Slider Image">
                                    <div class="slide-progress"></div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="slide-content layer-animation-1">
                                                    <p class="promo-title"><span>{{$banner->title}}</span> {!! html_entity_decode($banner->description) !!}</p>
                                                </div> <!-- end of slide-content -->
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end of slider-inner -->
                            </div> <!-- end of swiper-slide -->
                            @endforeach

                        </div> <!-- end of swiper-slide -->

                        <!-- Slider Navigation -->
                        <div class="swiper-arrow next slide"><i class="fa fa-angle-right"></i></div>
                        <div class="swiper-arrow prev slide"><i class="fa fa-angle-left"></i></div>

                        <!-- Slider Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <!-- End of Primary Slider Section -->
                @endif
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 top-promo-banners">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="promo-banner hover-effect-1 mb0">
                            <a href="index.html#">
                                <img src="{{asset('frontend/images/banners/banner-11.jpg')}}" alt="Promo Banner">
                            </a>
                        </div> <!-- end of promo-banner -->
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="top-banner">
                            <div class="promo-banner hover-effect-1 mb0">
                                <a href="index.html#">
                                    <img src="{{asset('frontend/images/banners/banner-12.jpg')}}" alt="Promo Banner">
                                </a>
                            </div> <!-- end of promo-banner -->
                        </div>
                        <div class="bottom-banner">
                            <div class="promo-banner hover-effect-1 mb0">
                                <a href="index.html#">
                                    <img src="{{asset('frontend/images/banners/banner-13.jpg')}}" alt="Promo Banner">
                                </a>
                            </div> <!-- end of promo-banner -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</section>
<!-- End of Slider with Banner Section -->

<!-- Start of Categories Section -->
<section class="categories-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <div class="section-title">
                    <h2>Sản Phẩm Hot Trend</h2>
                </div>
            </div>
        </div> <!-- end of row -->

        <div class="row product-row">
            <div class="col-12 col-sm-12 col-md-12">

                <!-- Tab Contents -->
                <div class="tab-content" id="our_categories_contents">

                    <div class="tab-pane show active anime-tab">
                        <div class="new-products pos-r">
                            <div class="element-carousel" data-visible-slide="5" data-loop="false" data-space-between="0" data-speed="1000">
                                <!-- Slides -->
                                <!-- Slider Navigation -->
                                <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
                                <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div>
                            </div> <!-- end of element-carousel -->
                        </div> <!-- end of new-products -->
                    </div> <!-- end of tab-pane -->

                </div> <!-- end of tab-content -->
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</section>
<!-- End of Categories Section -->

<!-- Start of Banner Section -->
<div class="banner-section mt-full mb-half">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="promo-banner hover-effect-1">
                    <a href="index-5.html#">
                        <img src="{{asset('frontend/images/banners/banner-7.jpg')}}" alt="Promo Banner">
                    </a>
                </div> <!-- end of promo-banner -->
            </div>

            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="promo-banner hover-effect-1">
                    <a href="index-5.html#">
                        <img src="{{asset('frontend/images/banners/banner-8.jpg')}}" alt="Promo Banner">
                    </a>
                </div> <!-- end of promo-banner -->
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div>
<!-- End of Banner Section -->

<!-- Start of New Arrivals Section -->
<section class="new-arrivals-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <div class="section-title">
                    <h2>Sản Phẩm Bán Chạy</h2>
                </div>
            </div>
        </div> <!-- end of row -->

        <div class="row product-row">
            <div class="col-12 col-sm-12 col-md-12">
                <div class="new-products pos-r">
                    <div class="element-carousel anime-element" data-visible-slide="6" data-loop="false" data-space-between="0" data-speed="1000">

                        <!-- Slides -->

                        <!-- Slider Navigation -->
                        <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
                        <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div>
                    </div> <!-- end of element-carousel -->
                </div> <!-- end of new-products -->
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</section>
<!-- End of New Arrivals Section -->

<!-- Start of New Arrivals Section -->
<section class="new-arrivals-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <div class="section-title">
                    <h2>Sản Phẩm Mới</h2>
                </div>
            </div>
        </div> <!-- end of row -->

    </div> <!-- end of container -->
</section>
<!-- End of New Arrivals Section -->

<!-- Start Shop Blog  -->
<section class="shop-blog section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>From Our Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @if($posts)
                @foreach($posts as $post)
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Blog  -->
                        <div class="shop-single-blog">
                            <img src="{{$post->photo}}" alt="{{$post->photo}}">
                            <div class="content">
                                <p class="date">{{$post->created_at->format('d/m/Y h:i A')}}</p>
                                <a href="{{route('blog.detail',$post->slug)}}" class="title">{{$post->title}}</a>
                                <a href="{{route('blog.detail',$post->slug)}}" class="more-btn">Continue Reading</a>
                            </div>
                        </div>
                        <!-- End Single Blog  -->
                    </div>
                @endforeach
            @endif

        </div>
    </div>
</section>
<!-- End Shop Blog  -->

<!-- Start Shop Services Area -->
<section class="shop-services section home">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-rocket"></i>
                    <h4>Free shiping</h4>
                    <p>Orders over $100</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-reload"></i>
                    <h4>Free Return</h4>
                    <p>Within 30 days returns</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-lock"></i>
                    <h4>Sucure Payment</h4>
                    <p>100% secure payment</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-tag"></i>
                    <h4>Best Peice</h4>
                    <p>Guaranteed price</p>
                </div>
                <!-- End Single Service -->
            </div>
        </div>
    </div>
</section>
<!-- End Shop Services Area -->
</main>

@include('frontend.layouts.newsletter')

@endsection

@push('styles')
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f2e5abf393162001291e431&product=inline-share-buttons' async='async'></script>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f2e5abf393162001291e431&product=inline-share-buttons' async='async'></script>
    <style>
        /* Banner Sliding */
        #Gslider .carousel-inner {
        background: #000000;
        color:black;
        }

        #Gslider .carousel-inner{
        height: 550px;
        }
        #Gslider .carousel-inner img{
            width: 100% !important;
            opacity: .8;
        }

        #Gslider .carousel-inner .carousel-caption {
        bottom: 60%;
        }

        #Gslider .carousel-inner .carousel-caption h1 {
        font-size: 50px;
        font-weight: bold;
        line-height: 100%;
        color: #F7941D;
        }

        #Gslider .carousel-inner .carousel-caption p {
        font-size: 18px;
        color: black;
        margin: 28px 0 28px 0;
        }

        #Gslider .carousel-indicators {
        bottom: 70px;
        }
    </style>
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script>

        /*==================================================================
        [ Isotope ]*/
        var $topeContainer = $('.isotope-grid');
        var $filter = $('.filter-tope-group');

        // filter items on button click
        $filter.each(function () {
            $filter.on('click', 'button', function () {
                var filterValue = $(this).attr('data-filter');
                $topeContainer.isotope({filter: filterValue});
            });

        });

        // init Isotope
        $(window).on('load', function () {
            var $grid = $topeContainer.each(function () {
                $(this).isotope({
                    itemSelector: '.isotope-item',
                    layoutMode: 'fitRows',
                    percentPosition: true,
                    animationEngine : 'best-available',
                    masonry: {
                        columnWidth: '.isotope-item'
                    }
                });
            });
        });

        var isotopeButton = $('.filter-tope-group button');

        $(isotopeButton).each(function(){
            $(this).on('click', function(){
                for(var i=0; i<isotopeButton.length; i++) {
                    $(isotopeButton[i]).removeClass('how-active1');
                }

                $(this).addClass('how-active1');
            });
        });
    </script>
    <script>
         function cancelFullScreen(el) {
            var requestMethod = el.cancelFullScreen||el.webkitCancelFullScreen||el.mozCancelFullScreen||el.exitFullscreen;
            if (requestMethod) { // cancel full screen.
                requestMethod.call(el);
            } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
                var wscript = new ActiveXObject("WScript.Shell");
                if (wscript !== null) {
                    wscript.SendKeys("{F11}");
                }
            }
        }

        function requestFullScreen(el) {
            // Supports most browsers and their versions.
            var requestMethod = el.requestFullScreen || el.webkitRequestFullScreen || el.mozRequestFullScreen || el.msRequestFullscreen;

            if (requestMethod) { // Native full screen.
                requestMethod.call(el);
            } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
                var wscript = new ActiveXObject("WScript.Shell");
                if (wscript !== null) {
                    wscript.SendKeys("{F11}");
                }
            }
            return false
        }
    </script>

@endpush
