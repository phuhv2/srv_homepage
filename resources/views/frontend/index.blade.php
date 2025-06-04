@extends('frontend.layouts.master')
@section('title','Công ty TNHH Sumirubber Việt Nam')
@section('main-content')
<!-- Main content Start -->
<div class="main-content">
    <!-- Slider Start -->
    <div id="rs-slider" class="rs-slider slider1">
        <div class="bend niceties">
            <div id="nivoSlider" class="slides">
                <img src="{{ asset('frontend/images/sl1.jpg') }}" alt="" title="#slide-1">
                <img src="{{ asset('frontend/images/DJI_0073.png') }}" alt="" title="#slide-2">
                <img src="{{ asset('frontend/images/IMG_6261.jpg') }}" alt="" title="#slide-3">
            </div>
        </div>
    </div>
    <!-- Slider End -->

    <!-- About Section Start -->
    <div id="rs-about" class="rs-about style1 bg1 md-pt-80">
        <div class="container">
            <div class="row y-bottom">
                <div class="col-lg-6 padding-0">
                    <img style="border: 10px solid #fff;" src="{{ asset('frontend/images/7003030_2.jpg') }}" alt="">
                </div>
                <div class="col-lg-6 pl-66 pt-75 pb-75 md-pt-42 md-pb-72">
                    <div class="sec-title mb-47 md-mb-42">
                        <div class="sub-title primary">{{ __('index.about_us') }}</div>
                        <h2 class="title mb-0">{{ __('index.company_name') }}</h2>
                    </div>
                    <div class="services-part mb-30">
                        <div class="services-icon">
                            <img src="{{ asset('frontend/images/1_1.png') }}" alt="image">
                        </div>
                        <div class="services-text">
                            <h4 class="title">{{ __('index.multi_industry_manufacturing_title') }}</h4>
                            <div class="desc">{{ __('index.multi_industry_manufacturing_desc') }}</div>
                        </div>
                    </div>
                    <div class="services-part">
                        <div class="services-icon">
                            <img src="{{ asset('frontend/images/2_2.png') }}" alt="image">
                        </div>
                        <div class="services-text">
                            <h4 class="title">{{ __('index.enhancing_product_value_title') }}</h4>
                            <div class="desc">{{ __('index.enhancing_product_value_desc') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Services Section Start -->
    <div id="rs-services" class="rs-services style1 modify pt-50 pb-15 md-pt-72 md-pb-64">
        <div class="container">
            <div class="sec-title text-center mb-47 md-mb-42">
                <div class="sub-title primary">{{ __('index.products') }}</div>
                <h2 class="title mb-0">{{ __('index.our_products') }}</h2>
            </div>
            <div class="row gutter-16">
                <div class="col-lg-3 col-sm-6 mb-16">
                    <div class="service-wrap">
                        <div class="icon-part">
                            <img src="{{ asset('frontend/images/1_2.png') }}" alt="">
                        </div>
                        <div class="content-part">
                            <h5 class="title">{{ __('index.rubber_components') }}</h5>
                            <div class="desc">{{ __('index.rubber_components_desc') }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-16">
                    <div class="service-wrap">
                        <div class="icon-part">
                            <img src="{{ asset('frontend/images/2_3.png') }}" alt="">
                        </div>
                        <div class="content-part">
                            <h5 class="title"><a href="services-single.html">{{ __('index.plastic_parts') }}</a></h5>
                            <div class="desc">{{ __('index.plastic_parts_desc') }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-16">
                    <div class="service-wrap">
                        <div class="icon-part">
                            <img src="{{ asset('frontend/images/3_2.png') }}" alt="">
                        </div>
                        <div class="content-part">
                            <h5 class="title">{{ __('index.metal_components') }}</h5>
                            <div class="desc">{{ __('index.metal_components_desc') }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-16">
                    <div class="service-wrap">
                        <div class="icon-part">
                            <img src="{{ asset('frontend/images/4_1.png') }}" alt="">
                        </div>
                        <div class="content-part">
                            <h5 class="title">{{ __('index.custom_assemblies') }}</h5>
                            <div class="desc">{{ __('index.custom_assemblies_desc') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->

    <!-- Portfolio Section Start -->
    <div class="container">
        <div id="rs-portfolio" class="rs-portfolio style1">
            <div class="rs-carousel owl-carousel dot-style1" data-loop="true" data-items="4" data-margin="22" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-lg-device="4" data-md-device-nav="false" data-md-device-dots="true">
                <div class="portfolio-item">
                    <div class="img-part">
                        <img src="{{ asset('frontend/images/3_2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="img-part">
                        <img src="{{ asset('frontend/images/4_1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="img-part">
                        <img src="{{ asset('frontend/images/5_1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="img-part">
                        <img src="{{ asset('frontend/images/7.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Section End -->


    <!-- Partner Section Start -->
    <div class="sec-title text-center mb-50 md-mb-39 pt-50">
        <div class="sub-title primary">{{ __('index.customers') }}</div>
        <h2 class="title mb-0">{{ __('index.our_customers') }}</h2>
    </div>
    <div class="rs-partner gray-bg pt-40 pb-35 md-pb-80">

        <div class="container">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="false" data-md-device-dots="false">
                <div class="partner-item">
                    <a href="#"><img src="{{ asset('frontend/images/canon.png') }}" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="{{ asset('frontend/images/brother.png') }}" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="{{ asset('frontend/images/kyocera.png') }}" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="{{ asset('frontend/images/sankyo.png') }}" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="{{ asset('frontend/images/konica.png') }}" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="{{ asset('frontend/images/rythm.png') }}" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="{{ asset('frontend/images/muto.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Section End -->

    <!-- Blog Section Start -->
    <div class="rs-blog style1 pt-50 pb-50 md-pt-71 md-pb-72 sm-pb-75">
        <div class="container">
            <div class="row y-middle mb-53 md-mb-40 sm-mb-50">
                <div class="col-md-6 sm-mb-22">
                    <div class="sec-title">
                        <span class="sub-title primary right-line">{{ __('index.latest_news') }}</span>
                        <h2 class="title mb-0">{{ __('index.company_activities') }}</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="btn-part text-right sm-text-left">
                        <a class="readon" href="{{route('blog')}}">{{ __('index.view_more') }}</a>
                    </div>
                </div>
            </div>
            <div class="rs-carousel owl-carousel dot-style1" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-lg-device="3" data-md-device-nav="false" data-md-device-dots="true">
                @if($posts)
                    @foreach($posts as $post)
                <div class="blog-wrap">
                    <div class="img-part">
                        <img src="{{$post->photo}}" alt="{{$post->title}}">
                        <div class="fly-btn">
                            <a href="{{route('blog.detail',$post->slug)}}"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <div class="content-part">
                        <a class="categories" href="{{ route('blog.category', $post->cat_info->slug ?? '#') }}">
                            {{ $post->cat_info->title ?? 'Không rõ danh mục' }}
                        </a>
                        <h3 class="title"><a href="{{route('blog.detail',$post->slug)}}">{{$post->title}}</a></h3>
                        <div class="blog-meta">
                            <div class="user-data">
                                <span><i class="fa fa-user-o"></i> {{$post->author_info->name ?? 'Anonymous'}}</span>
                            </div>
                            <div class="date">
                                <i class="fa fa-clock-o"></i> {{$post->created_at->format('d/m/Y h:i A')}}
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>
    <!-- Blog Section End -->
</div>
<!-- Main content End -->
@endsection
