<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
    swiper-container {
      width: 100%;
      height: 400px;
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
      height: 170px;
    }


    .head-image{
  width: 100%;
  height: 170px !important;
  object-fit: cover;
  object-position: right;
}

.btn{
  padding: 5px !important;
  font-size: 10px !important;
  margin: 15px !important;
  margin-left: 24px !important
}
    .banner{
      padding: 4px !important;
      height: 40px;
    }
    .banner a{
  padding: 5px !important;
  font-size: 12px !important;
}

.banner span{
  /* padding: 5px; */
  font-size: 12px !important;
}
}
.banner{
  padding: 10px
}
.banner a{
  padding: 5px;
  font-size: 18px
}

.banner span{
  /* padding: 5px; */
  font-size: 17px
}

.head-image{
  width: 100%;
  height: 370px;
  object-fit: cover;
  object-position: left;
}

</style>
@extends('header.html-header')
<body>
    @include('layouts.navigation')
    <div class="w-full text-center flex justify-center items-center banner" style="background-color: black;">
        <span class="" style="color: white; font-weight: 600;">Only for sale 75$ </span> <a href="" class="rounded font-semibold ml-3" style="border: 2px; background-color: white; color: black">Buy Now <span class="">!</span></a>
    </div>
    <div>
        {{ $slot }}
    </div>
             {{-- script --}}
             <script src="{{asset('js/search.js')}}"></script>
</body>
</html>