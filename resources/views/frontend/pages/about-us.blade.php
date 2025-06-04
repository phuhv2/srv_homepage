@php
    $setting = DB::table('settings')->first();
@endphp
@extends('frontend.layouts.master')
@section('title','About Us - Sumirubber Vietnam ltd')
@section('main-content')
<!-- Main content Start -->
<div class="main-content">
    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs bg-8">
        <div class="container">
            <div class="content-part text-center">
                <h1 class="breadcrumbs-title white-color mb-0">Về Chúng Tôi</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- About Section Start -->
    <div class="rs-about inner pt-50 lg-pt-92 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row y-middle mb-15 lg-mb-30 md-mb-0">
                <div class="col-lg-6 md-mb-95">
                    <div class="image-part">
                        <img src="{{ $setting->photo }}" alt="srv">
                    </div>
                </div>
                <div class="col-lg-6 pl-50 md-pl-15 pr-50 lg-pr-15">
                    <div class="sec-title mb-25">
                        <div class="sub-title primary">{{ __('about_us.section_title') }}</div>
                        <h2 class="title mb-18">{{ __('about_us.company_name') }}</h2>
                        <div class="desc">{{ __('about_us.company_intro') }}</div>
                    </div>
                    <ul class="listing-style2 mb-33">
                        @foreach (__('about_us.services') as $service)
                            <li>{{ $service }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Counter Section Start -->
    <div class="rs-counter style1 modify bg21 pt-92 pb-100 md-pt-72 md-pb-80">
        <div class="container">
            <div class="sec-title text-center mb-52 md-mb-29">
                <h2 class="title mb-0 white-color">Lý do khách hàng tin tưởng chúng tôi</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
                    <div class="couter-part plus">
                        <div class="rs-count">20</div>
                        <h5 class="title">Năm kinh nghiệm sản xuất</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
                    <div class="couter-part plus">
                        <div class="rs-count">1000</div>
                        <h5 class="title">Linh kiện được phát triển</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 xs-mb-30">
                    <div class="couter-part plus">
                        <div class="rs-count">500</div>
                        <h5 class="title">Nhân sự và chuyên gia kỹ thuật</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="couter-part plus">
                        <div class="rs-count">10</div>
                        <h5 class="title">Quốc gia đang hợp tác xuất khẩu</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Section End -->
</div>
<!-- Main content End -->
@endsection
