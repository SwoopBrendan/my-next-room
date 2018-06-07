<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>My Next Room</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('partials.top-nav')

        <div class="row">
            @guest
                <div class="col-md-12">
                    @yield('content')
                </div>
            @else
                <div class="col-md-2">
                    @include('partials.user-detail-block')

                    @include('partials.side-filter')
                </div>

                <div class="col-md-10">
                    <div class="main-content">
                        @yield('content')
                    </div>
                </div>
            @endguest
        </div>
    </div>
</body>
</html>
