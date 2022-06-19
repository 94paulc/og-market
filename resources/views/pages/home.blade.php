<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.header')
<body class="antialiased">
    @include('layouts.wallpaper')
    @include('home.sections')
    @include('home.trending')
    @include('home.info')
</body>
@include('layouts.footer')
</html>
