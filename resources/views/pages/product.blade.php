<x-app-guest-layout>
    <div class="flex justify-center flex-col items-center">
        <div class="py-2 flex justify-between product-container" style="width: 70%; margin-top: 50px">

            <div class="image-container" id="image-container" style="width: 500px; height: 500px">
                <div id="overlay" style="background-image: url('{{ asset('storage/' . $product->image) }}')"></div>
                <img src="{{ asset('storage/' . $product->image) }}" alt="" class="w-full h-full"
                    style="object-fit: cover" id="product-image">
            </div>
            <div>

            </div>
            <div class="flex justify-center flex-col product-info" style="width: 40%; gap: 14px">
                <div style="font-size: 30px; font-weight: 700">{{ $product->title }}</div>
                <div style="font-size: 25px; font-weight: 800; color: red">${{ $product->price }}</div>
                <div class="text-gray-600" style="font-size: 17px;">{{ $product->description }}</div>
                <div style="margin-top: 1rem"><a href="" class="border text-white font-semibold product-button"
                        style="background-color: black; padding: 1rem;">Add Card</a></div>
            </div>
        </div>
        <div id="mouse-overlay"></div>
    </div>
    </div>


</x-app-guest-layout>
