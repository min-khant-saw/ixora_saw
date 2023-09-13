<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends('header.html-header')
<body>
    @include('layouts.navigation')
    <div>
        {{ $slot }}
    </div>
</body>
</html>