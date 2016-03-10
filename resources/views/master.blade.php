<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="@yield('desc')">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        @section('styles')
            <link rel="stylesheet" href="{{ asset('css/vendor.min.css') }}">
            <link rel="stylesheet" href="{{ asset('css/master.min.css') }}">
        @show
    </head>
    <body>
        @include('includes.menu')

        @yield('content')

        @section('scripts')
            <script src="{{ asset('js/vendor.min.js') }}"></script>
            <script src="{{ asset('js/master.min.js') }}"></script>
        @show
    </body>
</html>