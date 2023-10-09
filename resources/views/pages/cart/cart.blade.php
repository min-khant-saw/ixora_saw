    <x-app-guest-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="shopping-cart">
                            <!-- Title -->
                            <div class="title text-center text-xl">
                                Shopping Bag
                            </div>
                            @forelse ($products as $product)
                                @php
                                    $totalPrice = $product->price;
                                    $discountPrice = $product->discount;
                                    $calc = $totalPrice * ($discountPrice / 100);
                                    $resultPrice = $totalPrice - $calc;
                                @endphp
                                <x-cart id="{{ $product->id }}" title="{{ $product->title }}"
                                    image="{{ $product->image }}" category="{{ $product->category->title }}"
                                    price="{{ $product->price }}" discountPrice="{{ $product->discount }}"
                                    discount="{{ $resultPrice }}" />
                            @empty
                                <div class="text-center my-4 font-bold text-xl">There is no product</div>
                            @endforelse
                        </div>
                        <div>

                        </div>
                        <div class="flex justify-end mt-2">
                            <div style="font-size: 17px;">Total : <span class="text-xl font-semibold"
                                    style="color: red;">$
                                    {{ $total }}</span></div>
                        </div>
                        <div class="flex justify-end mt-2"><a href="" class="text-white font-semibold"
                                style="background-color: black; padding: .4rem;">
                                Checkout
                            </a></div>
                    </div>
                </div>
            </div>
        </div>


    </x-app-guest-layout>
