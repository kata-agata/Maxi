<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Maxiskippers</title>

        @include('layouts.styles')
        @include('layouts.scripts')

    </head>
    <body style='height:5000px'>

        @include('layouts.header')
        @include('layouts.navbar')

        @yield('content')
    </body>
    <footer>
    </footer>
</html>