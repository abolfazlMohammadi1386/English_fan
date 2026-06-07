<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="HTML5,CSS3,HTML,Template,multi-page,Ecour - Education Courses & Training HTML Template">
    <meta name="description" content="Ecour - Education Courses & Training HTML Template">
    <meta name="author" content="Barat Hadian">

    <title>@yield('title', 'آموزشگاه زبان ایکور')</title>

    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/png">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery-ui-min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/line-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/swiper-min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>

<div class="preloader js-preloader">
    <img src="{{ asset('assets/img/preloader.gif') }}" alt="Image">
</div>

<div class="page-wrapper">
    @include('front.layouts.header')
    
    <main>
        @yield('content')
    </main>
    
    @include('front.layouts.footer')
</div>

<a href="#" class="back-to-top bounce"><i class="las la-arrow-up"></i></a>

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-validator.js') }}"></script>
<script src="{{ asset('assets/js/form-validation.js') }}"></script>
<script src="{{ asset('assets/js/swiper-min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/countdown.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
@stack('scripts')
</body>
</html>