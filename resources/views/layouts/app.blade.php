<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>My Next Room</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('components/summernote/dist/summernote-bs4.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="all" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/smoothness/jquery-ui.css" />

    @yield('styles')

</head>
<body>

    @include('partials.header')

    <div id="app">

        @include('partials.top-nav')

        <div class="container-fluid session-notification">
            @if (Session::has('error'))
                @include('partials.alert-error')
            @endif

            @if (Session::has('success'))
                @include('partials.alert-success')
            @endif

            @if (Session::has('info'))
                @include('partials.alert-info')
            @endif
        </div>

        @yield('content')

    </div>

    @include('partials.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('components/jquery/jquery.js') }}"></script>
    <script src="{{ asset('components/jqueryui/jquery-ui.js') }}"></script>
    <script src="{{ asset('components/summernote/dist/summernote-bs4.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            var $j = jQuery.noConflict();

            $('#greater_areas').change(function () {

                let locations = $('#locations');

                locations.prop("disabled", true);

                $.ajax({
                    url: 'getLocations/'+this.value,
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(json_response){

                        locations.prop("disabled", false);

                        let response_array = JSON.parse(json_response);
                        let listItems = '';

                        for (var i = 0; i < response_array.length; i++) {
                            listItems += "<option value='" + response_array[i].id + "'>" + response_array[i].name + "</option>";
                        }

                        locations.html(listItems);

                    }
                });

            });

            $('#summernote').summernote();

        });
    </script>

    @yield('scripts')

</body>
</html>
