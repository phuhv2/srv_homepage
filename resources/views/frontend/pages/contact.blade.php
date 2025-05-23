@php
    $setting = DB::table('settings')->first();
@endphp
@extends('frontend.layouts.master')
@section('title','Contact - Sumirubber Vietnam ltd')
@section('main-content')
<!-- Main content Start -->
<div class="main-content">
    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs bg-8">
        <div class="container">
            <div class="content-part text-center">
                <h1 class="breadcrumbs-title white-color mb-0">{{ __('contact.contact') }}</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- Contact Section Start -->
    <div id="rs-contact" class="rs-contact inner pt-50 md-pt-80">
        <div class="container">
            <div class="content-info-part mb-50">
                <div class="row gutter-16">
                    <div class="col-lg-4 md-mb-30">
                        <div class="info-item">
                            <div class="icon-part">
                                <i class="fa fa-at"></i>
                            </div>
                            <div class="content-part">
                                <h4 class="title">{{ __('contact.phone_number') }}</h4>
                                <a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 md-mb-30">
                        <div class="info-item">
                            <div class="icon-part">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="content-part">
                                <h4 class="title">{{ __('contact.email_address') }}</h4>
                                <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info-item">
                            <div class="icon-part">
                                <i class="fa fa-map-o"></i>
                            </div>
                            <div class="content-part">
                                <h4 class="title">{{ __('contact.address') }}</h4>
                                <p>{{ $setting->address }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section Start -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3727.444757613715!2d106.59297067596734!3d20.89441869237794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7908cb12eb8f%3A0xbee18b8495550980!2sC%C3%B4ng%20Ty%20Tnhh%20Sumirubber%20Vi%E1%BB%87t%20Nam!5e0!3m2!1svi!2s!4v1747302461241!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Contact Section End -->
</div>
<!-- Main content End -->
@endsection
