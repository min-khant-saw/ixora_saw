<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('header.html-header')
<body>
    @include('layouts.navigation')
    <div class="w-full text-center justify-center items-center banner {{request()->routeIs('home')? 'flex': 'hidden'}}" style="background-color: black;">
        <span class="" style="color: white; font-weight: 600;">Only for sale 75$ </span> <a href="" class="rounded font-semibold ml-3" style="border: 2px; background-color: white; color: black">Buy Now <span class="">!</span></a>
    </div>
    <div class="min-h-screen">
        {{ $slot }}
    </div>
    @include('footer')
             {{-- script --}}
             <script src="{{asset('js/script.js')}}"></script>
</body>
</html>