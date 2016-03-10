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
    <div class="ui inverted fixed menu">
        <div class="ui container">
            <a class="item title" href="{{ route('home') }}">
                <h3>Soywod's blog</h3>
            </a>

            <div class="item">
                v1.0.0
            </div>

            @if(Auth::check())
                <a href="{{ route('logout') }}" class="ui right item">
                    {{ trans('general.logout') }}
                </a>
            @endif
        </div>
    </div>

    @yield('content')

    @section('scripts')
        <script src="{{ asset('js/vendor.min.js') }}"></script>
        <script src="{{ asset('js/master.min.js') }}"></script>
    @show
</body>
</html>