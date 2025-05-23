@php
    $setting = DB::table('settings')->first();
@endphp
<!-- Footer Start -->
<footer id="rs-footer" class="rs-footer">
    <div class="container">
        <div class="footer-content pt-50 pb-50 md-pb-64 sm-pt-48">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 footer-widget md-mb-39">
                    <div class="about-widget pr-15">
                        <div class="logo-part">
                            <a href="{{route('home')}}"><img src="{{ asset('frontend/images/logo.png') }}" alt="Footer Logo"></a>
                        </div>
                        <p class="desc">{{ __('footer.sub_about_us') }}</p>
                        <div class="btn-part">
                            <a class="readon" href="{{route('about-us')}}">{{ __('footer.view_more') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 md-mb-32 footer-widget">
                    <h4 class="widget-title">{{ __('footer.contact_info') }}</h4>
                    <ul class="address-widget pr-40">
                        <li>
                            <i class="flaticon-location"></i>
                            <div class="desc">{{ $setting->address }}</div>
                        </li>
                        <li>
                            <i class="flaticon-call"></i>
                            <div class="desc">
                                <a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-email"></i>
                            <div class="desc">
                                <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                            </div>
                        </li>
                    </ul>
                </div>
                @php
                    use App\Models\Post;
                    $latestPosts = Post::latest()->take(2)->get();
                @endphp

                <div class="col-lg-4 col-md-12 col-sm-12 footer-widget">
                    <h4 class="widget-title">{{ __('footer.latest_posts') }}</h4>
                    <div class="footer-post">
                        @foreach($latestPosts as $post)
                            <div class="post-wrap mb-15">
                                <div class="post-img">
                                    <a href="{{route('blog.detail',$post->slug)}}">
                                        <img src="{{ $post->photo }}" alt="{{ $post->title }}">
                                    </a>
                                </div>
                                <div class="post-desc">
                                    <a href="{{route('blog.detail',$post->slug)}}">{{ $post->title }}</a>
                                    <div class="date-post">
                                        <i class="fa fa-calendar"></i>
                                        {{$post->created_at->format('d/m/Y')}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
        <div class="footer-bottom">
            <div class="row y-middle">
                <div class="col-lg-6 col-md-8 sm-mb-21">
                    <div class="copyright">
                        <p>© Copyright 2025 Sumirubber Vietnam.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 text-right sm-text-center">
                    <ul class="footer-social">
                        <li><a href="{{ route('lang.switch', 'vi') }}"><img style="max-width: 30px" src="{{ asset('frontend/images/vi.png') }}"/></a> </li>
                        <li><a href="{{ route('lang.switch', 'en') }}"><img style="max-width: 30px" src="{{ asset('frontend/images/en.png') }}"/></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- start scrollUp  -->
<div id="scrollUp">
    <i class="fa fa-angle-up"></i>
</div>
<!-- End scrollUp  -->

<!-- Search Modal Start -->
<div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="flaticon-cross"></span>
    </button>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="search-block clearfix">
                <form method="GET" action="{{route('blog.search')}}">
                    <div class="form-group">
                        <input name="search" class="form-control" placeholder="Search Here..." type="text" required="">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal End -->
<!-- modernizr js -->
<script src="{{ asset('frontend/js/modernizr-2.8.3.min.js') }}"></script>
<!-- jquery latest version -->
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<!-- Bootstrap v4.4.1 js -->
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<!-- Menu js -->
<script src="{{ asset('frontend/js/rsmenu-main.js') }}"></script>
<!-- op nav js -->
<script src="{{ asset('frontend/js/jquery.nav.js') }}"></script>
<!-- owl.carousel js -->
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<!-- Slick js -->
<script src="{{ asset('frontend/js/slick.min.js') }}"></script>
<!-- isotope.pkgd.min js -->
<script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
<!-- imagesloaded.pkgd.min js -->
<script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
<!-- wow js -->
<script src="{{ asset('frontend/js/wow.min.js') }}"></script>
<!-- aos js -->
<script src="{{ asset('frontend/js/aos.js') }}"></script>
<!-- Skill bar js -->
<script src="{{ asset('frontend/js/skill.bars.jquery.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
<!-- counter top js -->
<script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
<!-- video js -->
<script src="{{ asset('frontend/js/jquery.mb.YTPlayer.min.js') }}"></script>
<!-- magnific popup js -->
<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Nivo slider js -->
<script src="{{ asset('frontend/js/jquery.nivo.slider.js') }}"></script>
<!-- plugins js -->
<script src="{{ asset('frontend/js/plugins.js') }}"></script>
<!-- contact form js -->
<script src="{{ asset('frontend/js/contact.form.js') }}"></script>
<!-- main js -->
<script src="{{ asset('frontend/js/main.js') }}"></script>
@stack('scripts')
