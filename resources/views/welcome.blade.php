<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('header')
    <body class="antialiased">
    @include('home.search')
    @include('home.sections')
    @include('home.trending')
    </body>
    @include('footer')
</html>
