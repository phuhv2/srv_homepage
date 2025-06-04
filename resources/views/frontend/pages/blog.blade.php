@extends('frontend.layouts.master')
@section('title','Activity - Sumirubber Vietnam ltd')
@section('main-content')
<!-- Main content Start -->
<div class="main-content">
    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs bg-8">
        <div class="container">
            <div class="content-part text-center pt-160 pb-160">
                <h1 class="breadcrumbs-title white-color mb-0">Hoạt Động</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->
    <!-- Blog Section  Start -->
    <div class="rs-blog inner pt-100 pb-100 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach($posts as $post)
                    <div class="blog-wrap shadow mb-70 xs-mb-50">
                        <div class="image-part">
                            <a href="{{route('blog.detail',$post->slug)}}"><img src="{{$post->photo}}" alt=""></a>
                        </div>
                        <div class="content-part">
                            <h3 class="title mb-10"><a href="{{route('blog.detail',$post->slug)}}">{{$post->title}}</a></h3>
                            <ul class="blog-meta mb-22">
                                <li><i class="fa fa-calendar-check-o"></i> {{$post->created_at->format('d/m/Y')}}</li>
                                <li><i class="fa fa-user-o"></i> {{$post->author_info->name ?? 'Anonymous'}}</li>
                                <li>
                                    <i class="fa fa-book"></i>
                                    <a href="{{ route('blog.category', $post->cat_info->slug ?? '#') }}">
                                        {{ $post->cat_info->title ?? 'Không rõ danh mục' }}
                                    </a>
                                </li>
                            </ul>
                            <p class="desc mb-20">{!! html_entity_decode($post->summary) !!}</p>
                            <div class="btn-part">
                                <a class="readon-arrow" href="{{route('blog.detail',$post->slug)}}">{{ __('blog.continue_reading') }}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{ $posts->links('vendor.pagination.bootstrap-4') }}
                </div>

                <div class="col-lg-4 md-mb-50 pl-35 lg-pl-15 md-order-first">
                    <div id="sticky-sidebar" class="blog-sidebar">
                        <div class="sidebar-search sidebar-grid shadow mb-30">
                            <form class="search-bar" method="GET" action="{{route('blog.search')}}">
                                <input type="text" placeholder="{{ __('blog.search') }}" name="search">
                                <span>
                                    <button type="submit"><i class="flaticon-search"></i></button>
                                </span>
                            </form>
                        </div>

                        <div class="sidebar-popular-post sidebar-grid shadow mb-30">
                            <div class="sidebar-title">
                                <h3 class="title semi-bold mb-20">{{ __('blog.recent_post') }}</h3>
                            </div>
                            @foreach($recent_posts as $post)
                            <div class="single-post mb-20">
                                <div class="post-image">
                                    <a href="{{route('blog.detail',$post->slug)}}"><img src="{{$post->photo}}" alt="{{$post->title}}"></a>
                                </div>
                                <div class="post-desc">
                                    <div class="post-title">
                                        <h5 class="margin-0"><a href="{{route('blog.detail',$post->slug)}}">{{$post->title}}</a></h5>
                                    </div>
                                    <ul>
                                        <li><i class="fa fa-calendar"></i> {{$post->created_at->format('d/m/Y')}}</li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="sidebar-categories sidebar-grid shadow">
                            <div class="sidebar-title">
                                <h3 class="title semi-bold mb-20">{{ __('blog.categories') }}</h3>
                            </div>
                            <ul>
                                @foreach(Helper::postCategoryList('posts') as $cat)
                                <li><a href="{{route('blog.category',$cat->slug)}}">{{$cat->title}} </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-end"></div>
        </div>
    </div>
    <!-- Blog Section  End -->
</div>
<!-- Main content End -->
@endsection
