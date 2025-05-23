<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
{{--    <hr class="sidebar-divider my-0">--}}

{{--    <!-- Nav Item - Dashboard -->--}}
{{--    <li class="nav-item {{ request()->routeIs('admin') ? 'active' : '' }}">--}}
{{--        <a class="nav-link" href="{{route('admin')}}">--}}
{{--            <i class="fas fa-fw fa-tachometer-alt"></i>--}}
{{--            <span>Dashboard</span></a>--}}
{{--    </li>--}}

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">Hình Ảnh</div>

    <!-- File Manager -->
    <li class="nav-item {{ request()->routeIs('file-manager') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('file-manager')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Quản lý tệp</span></a>
    </li>

{{--    <!-- Banner -->--}}
{{--    <li class="nav-item {{ request()->routeIs('banner.*') ? 'active' : '' }}">--}}
{{--        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"--}}
{{--           aria-expanded="{{ request()->routeIs('banner.*') ? 'true' : 'false' }}"--}}
{{--           aria-controls="collapseTwo">--}}
{{--            <i class="fas fa-image"></i>--}}
{{--            <span>Quản lý banner</span>--}}
{{--        </a>--}}
{{--        <div id="collapseTwo" class="collapse {{ request()->routeIs('banner.*') ? 'show' : '' }}"--}}
{{--             aria-labelledby="headingTwo" data-parent="#accordionSidebar">--}}
{{--            <div class="bg-white py-2 collapse-inner rounded">--}}
{{--                <h6 class="collapse-header">Tùy chọn banner:</h6>--}}
{{--                <a class="collapse-item {{ request()->routeIs('banner.index') ? 'active' : '' }}"--}}
{{--                   href="{{route('banner.index')}}">Banner</a>--}}
{{--                <a class="collapse-item {{ request()->routeIs('banner.create') ? 'active' : '' }}"--}}
{{--                   href="{{route('banner.create')}}">Thêm banner</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </li>--}}

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">Tin Tức</div>

    <!-- Posts -->
    <li class="nav-item {{ request()->routeIs('post.*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#postCollapse"
           aria-expanded="{{ request()->routeIs('post.*') ? 'true' : 'false' }}"
           aria-controls="postCollapse">
            <i class="fas fa-fw fa-folder"></i>
            <span>Bài viết</span>
        </a>
        <div id="postCollapse" class="collapse {{ request()->routeIs('post.*') ? 'show' : '' }}"
             aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tùy chọn bài viết:</h6>
                <a class="collapse-item {{ request()->routeIs('post.index') ? 'active' : '' }}"
                   href="{{route('post.index')}}">Bài viết</a>
                <a class="collapse-item {{ request()->routeIs('post.create') ? 'active' : '' }}"
                   href="{{route('post.create')}}">Thêm bài viết</a>
            </div>
        </div>
    </li>

    <!-- Post Categories -->
    <li class="nav-item {{ request()->routeIs('post-category.*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#postCategoryCollapse"
           aria-expanded="{{ request()->routeIs('post-category.*') ? 'true' : 'false' }}"
           aria-controls="postCategoryCollapse">
            <i class="fas fa-sitemap fa-folder"></i>
            <span>Danh mục bài viết</span>
        </a>
        <div id="postCategoryCollapse" class="collapse {{ request()->routeIs('post-category.*') ? 'show' : '' }}"
             aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tùy chọn danh mục:</h6>
                <a class="collapse-item {{ request()->routeIs('post-category.index') ? 'active' : '' }}"
                   href="{{route('post-category.index')}}">Danh mục bài viết</a>
                <a class="collapse-item {{ request()->routeIs('post-category.create') ? 'active' : '' }}"
                   href="{{route('post-category.create')}}">Thêm danh mục</a>
            </div>
        </div>
    </li>

    <!-- Post Tags -->
    <li class="nav-item {{ request()->routeIs('post-tag.*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tagCollapse"
           aria-expanded="{{ request()->routeIs('post-tag.*') ? 'true' : 'false' }}"
           aria-controls="tagCollapse">
            <i class="fas fa-tags fa-folder"></i>
            <span>Thẻ bài viết</span>
        </a>
        <div id="tagCollapse" class="collapse {{ request()->routeIs('post-tag.*') ? 'show' : '' }}"
             aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tùy chọn thẻ:</h6>
                <a class="collapse-item {{ request()->routeIs('post-tag.index') ? 'active' : '' }}"
                   href="{{route('post-tag.index')}}">Thẻ bài viết</a>
                <a class="collapse-item {{ request()->routeIs('post-tag.create') ? 'active' : '' }}"
                   href="{{route('post-tag.create')}}">Thêm thẻ bài viết</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Heading -->
    <div class="sidebar-heading">Cài đặt chung</div>

    <!-- Users -->
    <li class="nav-item {{ request()->routeIs('users.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('users.index')}}">
            <i class="fas fa-users"></i>
            <span>Người dùng</span></a>
    </li>

    <!-- Settings -->
    <li class="nav-item {{ request()->routeIs('settings') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('settings')}}">
            <i class="fas fa-cog"></i>
            <span>Cài đặt</span></a>
    </li>

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
