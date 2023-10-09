@php
    $totalPrice = $product->price;
    $discountPrice = $product->discount;
    $calc = $totalPrice * ($discountPrice / 100);
    $resultPrice = $totalPrice - $calc;
@endphp

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
                <div class="flex justify-start items-center gap-x-2">
                    <div style="font-size: {{ $product->discount > 0 ? '20px' : '23px' }}; font-weight: 800; color: {{ $product->discount > 0 ? 'gray' : 'red' }}"
                        class="{{ $product->discount > 0 ? 'line-through' : '' }}">$
                        {{ $product->price }}</div>
                    @if ($product->discount > 0)
                        <div style="font-size: 23px; font-weight: 800; color: red">$ {{ ceil($resultPrice) }}</div>
                    @endif
                </div>
                <div class="text-gray-600" style="font-size: 17px;">{{ $product->description }}</div>
                <form style="margin-top: 1rem" method="POST" action="{{ route('cart.add', ['id' => $product->id]) }}">
                    @csrf
                    @method('post')
                    <button type="submit" class="border text-white font-semibold product-button"
                        style="background-color: black; padding: 1rem;">Add Card</button>
                </form>
            </div>
        </div>
        <div id="mouse-overlay"></div>
    </div>
    </div>


</x-app-guest-layout>
