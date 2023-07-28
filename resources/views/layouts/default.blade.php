<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body class="text-gray-900 text-sm">
    @include('includes.header')
    @yield('content')
    @include('includes.footer')
</body>
</html>
