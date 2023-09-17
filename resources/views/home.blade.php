<x-app-guest-layout>
    {{-- <x-slot name="header">
        <h2 class="font-normal text-xl text-white leading-tight text-center">
            {{ __('Free shipping over $50') }}
        </h2>
    </x-slot> --}}

    <div class="w-full py-2 flex justify-center items-center">
            <div class="relative" style="width: 80%">
   
                <img class="head-image" src="https://icms-image.slatic.net/images/ims-web/3e7d967d-d9bd-4013-8152-9237dea60cae.jpg" alt="" srcset="">
    
                <div class="absolute " style="width: 50%; top: 0px; left: 0px; height: 100%; background: linear-gradient(to left, rgba(0, 0, 0, 0.029),rgba(0, 0, 0, 0.067),rgba(0, 0, 0, 0.166),rgba(0, 0, 0, 0.363),rgba(3, 0, 0, 0.851));
                ">
                <button class="bg-white p-2 font-semibold rounded btn" style="margin: 30px; margin-left: 50px">Shop Now</button>
    
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

        <h1 class="text-center text-2xl font-semibold category" style="font-size: 30px; margin: 15px auto">Category</h1>

        <div class="w-full flex justify-center items-center mt-2" style="gap: 15px;">


            <div class="relative overflow-hidden fashion">
                <div class="absolute top-0 left-0 text-white fashion-text flex justify-center items-center flex-col" style="width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.696); transition: all .4s ease-in-out; margin-top: 300px">
                    <h1 class="text-2xl font-semibold category-head">Fashion</h1>
                    <div class="flex justify-center items-center transition-all shop-now-container">
                        <p class="shop-now">Shop Now </p>
                        <span class="material-symbols-rounded mt-1" style="font-size: 18px">
                            arrow_forward
                            </span>
                    </div>
                </div>
                <img class="category-img" style="width: 250px; height:250px; object-fit: cover;" src="https://scontent-kul3-1.xx.fbcdn.net/v/t39.30808-6/377931717_619740620279329_7494400302942887383_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=49d041&_nc_ohc=uGPpD29QvQcAX_00wwB&_nc_ht=scontent-kul3-1.xx&oh=00_AfAHfbSfN6ldAuKcFiWKoVoFcE_ssRp7dH3roRV-1fwoUg&oe=650B9C03" alt="">
            </div>
            <div class="relative overflow-hidden fashion">
                <div class="absolute top-0 left-0 text-white fashion-text flex justify-center items-center flex-col" style="width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.696); transition: all .4s ease-in-out; margin-top: 300px">
                    <h1 class="text-2xl font-semibold category-head">Accessories</h1>
                    <div class="flex justify-center items-center transition-all shop-now-container">
                        <p class="shop-now">Shop Now </p>
                        <span class="material-symbols-rounded mt-1" style="font-size: 18px">
                            arrow_forward
                            </span>
                    </div>
                </div>
                <img class="category-img" style="width: 250px; height:250px; object-fit: cover;" src="https://hips.hearstapps.com/hmg-prod/images/wireless-earbuds-1661183784.jpg?resize=1200:*" alt="">
            </div>

            <div class="relative overflow-hidden fashion">
                <div class="absolute top-0 left-0 text-white fashion-text flex justify-center items-center flex-col" style="width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.696); transition: all .4s ease-in-out; margin-top: 300px">
                    <h1 class="text-2xl font-semibold category-head">Home Decors</h1>
                    <div class="flex justify-center items-center transition-all shop-now-container">
                        <p class="shop-now">Shop Now </p>
                        <span class="material-symbols-rounded mt-1" style="font-size: 18px">
                            arrow_forward
                            </span>
                    </div>
                </div>
                <img class="category-img" style="width: 250px; height:250px; object-fit: cover;" src="https://media.designcafe.com/wp-content/uploads/2022/09/16092055/cheap-room-decor-ideas.jpg" alt="">
            </div>


        </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>

</x-app-guest-layout>
