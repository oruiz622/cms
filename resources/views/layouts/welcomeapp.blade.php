<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="keywords" content="">

        @yield('title')

        <!-- Styles -->
        <link href="{{ asset('css/page.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/fonts/fontawesome.min.css') }}" rel="stylesheet">

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="{{ asset('images/logo/cms-icon.png') }}">
        <link rel="icon" href="{{ asset('images/logo/cms-icon.png') }}">
    </head>

    <body>
        @yield('content')

        <!-- Scripts -->
        <script src="{{ asset('js/page.min.js') }}"></script>
        <script src="{{asset('/js/script.js')}}"></script>
        <script src="{{asset('/js/fontawesome.min.js')}}"></script>

    </body>

</html>
