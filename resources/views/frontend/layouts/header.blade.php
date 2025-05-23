@php
    $setting = DB::table('settings')->first();
@endphp
    <!--Full width header Start-->
<div class="full-width-header">
    <!-- Toolbar Start -->
    <div class="toolbar-area hidden-md">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="toolbar-contact">
                        <ul>
                            <li><i class="flaticon-email"></i><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></li>
                            <li><i class="flaticon-call"></i><a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="toolbar-sl-share">
                        <ul>
                            <li><a href="{{ route('lang.switch', 'vi') }}"><img style="max-width: 30px" src="{{ asset('frontend/images/vi.png') }}"/></a> </li>
                            <li><a href="{{ route('lang.switch', 'en') }}"><img style="max-width: 30px" src="{{ asset('frontend/images/en.png') }}"/></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Toolbar End -->

    <!--Header Start-->
    <header id="rs-header" class="rs-header">
        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo-area">
                            <a href="{{ route('home') }}">
                                <img src="{{ $setting->logo }}" alt="Sumirubber Vietnam">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 text-right">
                        <div class="rs-menu-area">
                            <div class="main-menu">
                                <div class="mobile-menu">
                                    <a class="rs-menu-toggle">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </div>
                                @php
                                    $currentRoute = Route::currentRouteName();
                                @endphp
                                <nav class="rs-menu pr-65">
                                    <ul class="nav-menu">
                                        <li class="rs-mega-menu mega-rs {{ $currentRoute == 'home' ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('home') }}">{{ __('header.home') }}</a>
                                        </li>
                                        <li class="{{ $currentRoute == 'about-us' ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('about-us') }}">{{ __('header.about_us') }}</a>
                                        </li>
                                        <li class="menu-item-has-children {{ Str::startsWith($currentRoute, 'blog') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('blog') }}">{{ __('header.activity') }}</a>
                                            <ul class="sub-menu">
                                                @foreach(Helper::postCategoryList('posts') as $cat)
                                                    <li>
                                                        <a href="{{ route('blog.category', $cat->slug) }}"
                                                           class="{{ request()->is('blog/category/'.$cat->slug) ? 'current-menu-item' : '' }}">
                                                            {{ $cat->title }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="rs-mega-menu mega-rs {{ $currentRoute == 'recruitment' ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('recruitment') }}">{{ __('header.recruitment') }}</a>
                                        </li>
                                        <li class="{{ $currentRoute == 'contact' ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('contact') }}">{{ __('header.contact') }}</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div> <!-- //.main-menu -->
                            <div class="expand-btn-inner">
                                <ul>
                                    <li class="search-parent">
                                        <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a id="nav-expander" class="humburger nav-expander" href="#">
                                            <span class="dot1"></span>
                                            <span class="dot2"></span>
                                            <span class="dot3"></span>
                                            <span class="dot4"></span>
                                            <span class="dot5"></span>
                                            <span class="dot6"></span>
                                            <span class="dot7"></span>
                                            <span class="dot8"></span>
                                            <span class="dot9"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->

        <!-- Canvas Menu start -->
        <nav class="right_menu_togle hidden-md">
            <div class="close-btn">
                        <span id="nav-close" class="humburger">
                            <span class="dot1"></span>
                            <span class="dot2"></span>
                            <span class="dot3"></span>
                            <span class="dot4"></span>
                            <span class="dot5"></span>
                            <span class="dot6"></span>
                            <span class="dot7"></span>
                            <span class="dot8"></span>
                            <span class="dot9"></span>
                        </span>
            </div>
            <div class="canvas-logo">
                <a href="{{ route('home') }}"><img src="{{ asset('frontend/images/logo-dark.png') }}" alt="logo"></a>
            </div>
            <div class="offcanvas-text">
                <p>{{ __('footer.sub_about_us') }}</p>
            </div>
            <div class="canvas-contact">
                <ul class="contact">
                    <li><i class="flaticon-location"></i> {{ $setting->address }}</li>
                    <li><i class="flaticon-call"></i><a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a></li>
                    <li><i class="flaticon-email"></i><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></li>
                </ul>
            </div>
        </nav>
        <!-- Canvas Menu end -->
    </header>
    <!--Header End-->
</div>
<!--Full width header End-->
