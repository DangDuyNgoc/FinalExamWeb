<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <link rel="stylesheet" type="text/csss" href="{{asset('/public/images/favicon.ico')}}">
    @include('front.toplibs')
    <link rel="stylesheet" href="{{asset('/public/css/main.css')}}">
</head>
<body>
<div class="container-fluid">
    <div class="row align-items-center py-3 px-xl-5">
        @include('front.header')
    </div><!--Header-->
</div>

<div class="container-fluid mb-5">
    <div class="row border-top px-xl-5">
        <div class="">
            @include('front.topnavbar')
            @include('front.carousel')
        </div>
    </div>
</div>

@yield('content')

@include('front.footer')

@include('front.bottomlibs')
</body>

<script type="text/javascript" src="{{asset('/public/js/index.js')}}"></script>
<script type="text/javascript" src="{{asset('/public/js/cart.js')}}"></script>
</html>
