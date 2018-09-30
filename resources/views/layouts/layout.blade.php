<!--Layout for home page-->

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Maxiskippers</title>

        @include('layouts.styles')
        @include('layouts.scripts')

    </head>
    <body style="height: 5000px">
        
        @include('layouts.header')
        @include('layouts.navbar')
        
        @yield('content')
        
        @include('layouts.footer')
        
        
        
        <div class="container-fluid">

            @include('sections.intro')
            <div class="dropdown">
                <ul class="dropdown-menu">
                    <li><a href="{{ route('lang', ['lang' => 'de']) }}">German</a></li>
                    <li><a href="{{ route('lang', ['lang' => 'fr']) }}">French</a></li>
                    <li><a href="{{ route('lang', ['lang' => 'en']) }}">English</a></li>
                </ul>
            </div>

            @if(app()->getLocale()=='en')
            english
            @elseif (app()->getLocale()=='fr')
            french
            @endif
        </div>
        <div>

        </div>

    </body>
    <footer>
        
    </footer>
</html>