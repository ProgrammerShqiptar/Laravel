<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        @section('head')
        <link href="{{ URL::asset('_css/main.css') }}" rel="stylesheet" media="screen, projection">        
        @show
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        @yield('header')
        @yield('body')
    </body>
</html>
