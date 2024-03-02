<?php 
    $looptags = ['Nissan Silvia', 'Skyline R34', 'Mazda 3', 'Mazda RX7', 'Subaru', 'Subaru WRX', 'Subaru WRX STI', 'Ford Mustang', 'Ford Bronco'];
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{url("admin/plugins/fontawesome-free/css/all.min.css")}}">

        <!-- CSS -->
        <link href="{{ url("front/css/main.css") }}" rel="stylesheet" />

    </head>
    <body class="antialiased">

        @include('layouts.front.header')

        @yield('content')

        @include('layouts.front.footer')

        <script src="{{url("front/js/main.js")}}"></script>
    </body>
</html>
