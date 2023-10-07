<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('header.html-header')

<meta property="og:site_name" content="Ixora Saw">
<meta property="og:title" content="Ixora Saw">
<meta property="og:description" content="">
<meta property="og:type" content="website">
<meta property="og:locale" content="en">
<meta property="og:url" content="{{ url()->full() }}">
<meta property="og:image" content="{{ URL::asset('build/assets/images/Ixora-Saw-Logo-background.png') }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt"
    content="Build your knowledge with the hidden Laravel Secrets you find in this book. Learn about the why and not the what.">

<body>
    @include('layouts.navigation')
    <div class="w-full text-center justify-center items-center banner {{ request()->routeIs('home') ? 'flex' : 'hidden' }}"
        style="background-color: black;">
        <span class="" style="color: white; font-weight: 600;">Only for sale 75$ </span> <a href=""
            class="rounded font-semibold ml-3" style="border: 2px; background-color: white; color: black">Buy Now <span
                class="">!</span></a>
    </div>
    <div class="min-h-screen">
        {{ $slot }}
    </div>
    @include('footer')
    {{-- script --}}
    <script src="{{ asset('js/s.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>
