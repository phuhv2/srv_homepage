<!DOCTYPE html>
<html lang="zxx">
<head>
	@include('frontend.layouts.head')
</head>
<body class="defult-home">
    <!-- Preloader area start here -->
    <div id="loader" class="loader">
        <div class="spinner"></div>
    </div>
    <!--End preloader here -->
	<div id="whole" class="whole-site-wrapper fluid-layout">
		@include('frontend.layouts.notification')
		@include('frontend.layouts.header')
		@yield('main-content')
		@include('frontend.layouts.footer')
	</div>
</body>
</html>
