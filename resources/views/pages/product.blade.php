@php
    $totalPrice = $product->price;
    $discountPrice = $product->discount;
    $calc = $totalPrice * ($discountPrice / 100);
    $resultPrice = $totalPrice - $calc;

    // Request Image
    $request = request('img');

    $currentImage;

    switch ($request) {
        case null:
        case 'one':
            $currentImage = $product->imageOne;
            break;
        case 'two':
            $currentImage = $product->imageTwo;
            break;
        case 'three':
            $currentImage = $product->imageThree;
            break;
        default:
            $product->imageOne;
            break;
    }
@endphp

<x-app-guest-layout>
    <div class="flex justify-center flex-col items-center">
        <div class="py-2 flex justify-center items-center product-container flex-col gap-y-4"
            style="width: 70%; margin-top: 50px">

            <div class="image-container" id="image-container" style="width: 500px; height: 500px">
                <div id="overlay" style="background-image: url('{{ asset('storage/' . $currentImage) }}')"></div>
                <img src="{{ asset('storage/' . $currentImage) }}" alt="" class="w-full h-full select-none"
                    style="object-fit: cover" id="product">
            </div>
            <div>
                <div class="flex justify-center flex-wrap gap-5">
                    <a href="{{ url()->current() . '/?img=one' }}">
                        <img src="{{ asset('storage/' . $product->imageOne) }}" alt=""
                            class="w-16 h-16 md:w-28 md:h-28 object-cover cursor-pointer select-none border-gray-700 p-1 {{ $request === null || $request === 'one' ? 'border-2 border-dashed' : '' }}"
                            id="product-image"> </a>
                    <a href="{{ url()->current() . '/?img=two' }}">
                        <img src="{{ asset('storage/' . $product->imageTwo) }}" alt=""
                            class="w-16 h-16 md:w-28 md:h-28 object-cover cursor-pointer select-none border-gray-700 p-1 {{ $request === 'two' ? 'border-2 border-dashed' : '' }}"
                            id="product-image">
                    </a>

                    <a href="{{ url()->current() . '/?img=three' }}">
                        <img src="{{ asset('storage/' . $product->imageThree) }}" alt=""
                            class="w-16 h-16 md:w-28 md:h-28 object-cover cursor-pointer select-none border-gray-700 p-1 {{ $request === 'three' ? 'border-2 border-dashed' : '' }}"
                            id="product-image">
                    </a>
                </div>

            </div>
            <div class="flex justify-center flex-col w-full items-center gap-y-1">
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
