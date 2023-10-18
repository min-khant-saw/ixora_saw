<x-home-header title="Categories" />

<div class="w-full flex justify-center items-center mt-2 category-container px-2" style="gap: 15px;">


    <div class="relative overflow-hidden fashion">
        <div class="absolute top-0 left-0 text-white fashion-text flex justify-center items-center flex-col"
            style="width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.696); transition: all .4s ease-in-out; margin-top: 300px">
            <h1 class="text-2xl font-semibold category-head">Fashion</h1>
            <a href="{{ route('fashion') }}" class="flex justify-center items-center transition-all shop-now-container">
                <p class="shop-now">Shop Now </p>
                <span class="material-symbols-rounded mt-1" style="font-size: 18px">
                    arrow_forward
                </span>
            </a>
        </div>
        <img class="category-img" style="width: 280px; height:250px; object-fit: cover;"
            src="{{ asset('categories/' . 'Fashion.jpg') }}" alt="">
    </div>
    <div class="relative overflow-hidden fashion">
        <div class="absolute top-0 left-0 text-white fashion-text flex justify-center items-center flex-col"
            style="width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.696); transition: all .4s ease-in-out; margin-top: 300px">
            <h1 class="text-2xl font-semibold category-head">Accessories</h1>
            <a href="{{ route('accessories') }}"
                class="flex justify-center items-center transition-all shop-now-container">
                <p class="shop-now">Shop Now </p>
                <span class="material-symbols-rounded mt-1" style="font-size: 18px">
                    arrow_forward
                </span>
            </a>
        </div>
        <img class="category-img" style="width: 280px; height:250px; object-fit: cover;"
            src="{{ asset('categories/' . 'Accessories.jpg') }}" alt="">
    </div>

    <div class="relative overflow-hidden fashion">
        <div class="absolute top-0 left-0 text-white fashion-text flex justify-center items-center flex-col"
            style="width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.696); transition: all .4s ease-in-out; margin-top: 300px">
            <h1 class="text-2xl font-semibold category-head">Home Decors</h1>
            <a href="{{ route('homeDecor') }}"
                class="flex justify-center items-center transition-all shop-now-container">
                <p class="shop-now">Shop Now </p>
                <span class="material-symbols-rounded mt-1" style="font-size: 18px">
                    arrow_forward
                </span>
            </a>
        </div>
        <img class="category-img" style="width: 280px; height:250px; object-fit: cover;"
            src="{{ asset('categories/' . 'Home-Decor.png') }}" alt="">
    </div>

    <div class="relative overflow-hidden fashion">
        <div class="absolute top-0 left-0 text-white fashion-text flex justify-center items-center flex-col"
            style="width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.696); transition: all .4s ease-in-out; margin-top: 300px">
            <h1 class="text-2xl font-semibold category-head">Educations</h1>
            <a href="{{ route('homeDecor') }}"
                class="flex justify-center items-center transition-all shop-now-container">
                <p class="shop-now">Shop Now </p>
                <span class="material-symbols-rounded mt-1" style="font-size: 18px">
                    arrow_forward
                </span>
            </a>
        </div>
        <img class="category-img" style="width: 280px; height:250px; object-fit: cover;"
            src="{{ asset('categories/' . 'Education.jpg') }}" alt="">
    </div>
</div>
