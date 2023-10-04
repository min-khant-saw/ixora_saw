<div class="relative rounded product" style="width: 320px; height: 320px;">
    <a href="{{ route('product', ['id' => $id]) }}" style="text-decoration: none">
        <div class="relative" style="width: 100%; height: 100%;">
            <img class="w-full" style="object-fit: cover; height: 100%" src="{{ asset('storage/' . $image) }}"
                alt="" srcset="" />
        </div>
        <div class="flex justify-center items-center flex-col mt-1 text-center">
            <p class="text-base text-gray-500">{{ $category }}</p>
            <h1 class="text-xl product-header">{{ $title }}</h1>
            <p class="text-lg text-gray-600 font-semibold">{{ $price }}$</p>
        </div>
    </a>
</div>
