<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="Core HTML Project">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="{{asset('user/assets/vendor/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/vendor/owlcarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/vendor/lightcase/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/vendor/lightcase/lightcase')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('user/assets/css/custom.user.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/style.min.css')}}">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link href="https://file.myfontastic.com/7vRKgqrN3iFEnLHuqYhYuL/icons.css" rel="stylesheet">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head>
<body data-spy="scroll" data-target="#navbar-nav-header" class="static-layout bg-white">
	<div class="boxed-page">

<nav id="gtco-header-navbar" class="navbar navbar-expand-lg py-4">
    @yield('nav')
</nav>

@yield('carousel')
@yield('who_we_are')
@yield('counter')
<!-- End of Counter Section -->

<!-- Features Section-->
@yield('feature')
<!-- End of Features Section-->

@yield('social')

<!-- Blog Section -->
@yield('latest_news')
<!-- End of Blog Section -->

<!-- Portfolio Section -->

<!-- End of Portfolio Section -->

@yield('pricing')

<!-- Client Section -->
@yield('clients')
<!-- End of Client Section -->

@yield('footer')

</div>
	<!-- External JS -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script src="{{asset('user/assets/vendor/bootstrap/popper.min.js')}}"></script>
	<script src="{{asset('user/assets/vendor/bootstrap/bootstrap.min.js')}}"></script>
	<script src="{{asset('user/assets/vendor/select2/select2.min.js')}}"></script>
	<script src="{{asset('user/assets/vendor/owlcarousel/owl.carousel.min.js')}}"></script>
	<script src="{{asset('user/assets/vendor/isotope/isotope.min.js')}}"></script>
	<script src="{{asset('user/assets/vendor/lightcase/lightcase.js')}}"></script>
	<script src="{{asset('user/assets/vendor/waypoints/waypoint.min.js')}}"></script>
	<script src="{{asset('user/assets/vendor/countTo/jquery.countTo.js')}}"></script>

	<!-- Main JS -->
	<script src="{{asset('user/assets/js/app.min.js')}}"></script>
</body>
</html>
