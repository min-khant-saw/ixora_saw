<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
    swiper-container {
      width: 100%;
      height: 500px;
    }

    swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
    }
    @media only screen and (max-width: 600px) {
        swiper-container {
      width: 100%;
      height: 200px;
    }
}
</style>
@extends('header.html-header')
<body>
    @include('layouts.navigation')
    <div class="w-full text-center flex justify-center items-center" style="padding: 12px; background-color: #F7EF3E;">
        <span class="text-lg" style="color: red; font-weight: 600;">Only for sale 75$ </span> <a href="" class="bg-red-600 p-2 text-lg rounded text-white font-semibold ml-3" style="border: 2px">Buy Now !</a>
    </div>
    <div>
        {{ $slot }}
    </div>
             {{-- script --}}
             <script src="{{asset('js/search.js')}}"></script>
</body>
</html>