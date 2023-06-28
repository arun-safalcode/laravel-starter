<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css')}}">
        @yield('css')
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            @include('backend.layouts.header')

            @include('backend.layouts.sidebar')
            
            @yield('content')

            @include('backend.layouts.footer')

        </div>
    </body>
</html>