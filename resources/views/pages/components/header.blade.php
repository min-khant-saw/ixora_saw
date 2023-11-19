<div class="w-full py-2 flex justify-center items-center">
    <div class="relative head-container" style="width: 90%">

        <x-product class="w-full h-[300px] md:h-[500px]" id="{{ $latest[0]->id }}" title="" price=""
            image="{{ $latest[0]->imageOne }}" category="" discountPrice="" discount="" />

        <div class="absolute "
            style="width: 50%; top: 0px; left: 0px; height: 100%; background: linear-gradient(to left, rgba(0, 0, 0, 0.029),rgba(0, 0, 0, 0.067),rgba(0, 0, 0, 0.166),rgba(0, 0, 0, 0.363),rgba(3, 0, 0, 0.851));
        ">
            <a href="{{ route('product', ['id' => $latest[0]->id]) }}" class="bg-white font-semibold rounded btn"
                style="margin: 30px; margin-left: 50px; width: max-content; padding: 3px 9px;">Shop Now</a>

            {{-- <swiper-container class="mySwiper w-full border" pagination="true" pagination-clickable="true" space-between="30"
        centered-slides="true" autoplay-delay="5500" autoplay-disable-on-interaction="false">

            <swiper-slide>
                <img src="https://icms-image.slatic.net/images/ims-web/1994979d-8a01-4725-8d6a-b24d5b19c17c.jpg" alt="" srcset="">
            </swiper-slide>
            <swiper-slide>
                <img src="https://icms-image.slatic.net/images/ims-web/0e7494a0-ec61-480f-b3c0-1879fbf55abf.jpg" alt="" srcset="">
            </swiper-slide>
          </swiper-container> --}}
        </div>

    </div>
</div>
