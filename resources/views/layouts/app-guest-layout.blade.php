<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends('header.html-header')
<body>
    @include('layouts.navigation')
    <div>
        {{ $slot }}
    </div>
             {{-- script --}}
             <script src="{{asset('js/search.js')}}"></script>
</body>
</html>