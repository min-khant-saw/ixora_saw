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
                            @php
                                $productId = [];
                                $productCount = [];
                            @endphp

                            @foreach ($products as $product)
                                @php
                                    $totalPrice = $product->price;
                                    $discountPrice = $product->discount;
                                    $calc = $totalPrice * ($discountPrice / 100);
                                    $resultPrice = $totalPrice - $calc;

                                    // Count the occurrences of the current product's ID
                                    if (!isset($productCounts[$product->id])) {
                                        $productCounts[$product->id] = 1;
                                    } else {
                                        $productCounts[$product->id]++;
                                        continue; // Skip rendering additional instances
                                    }
                                @endphp
                            @endforeach


                            @forelse ($products as $product)
                                @if (!in_array($product->id, $productId))
                                    <x-cart ids="{{ $product->id }}" id="{{ $product->pivot->id }}"
                                        title="{{ $product->title }}" image="{{ $product->imageOne }}"
                                        category="{{ $product->category->title }}" price="{{ $product->price }}"
                                        discountPrice="{{ $product->discount }}" discount="{{ $resultPrice }}"
                                        totalProduct="{{ $productCounts[$product->id] }}"
                                        productId="{{ $product->pivot->product_id }}" />


                                    @php
                                        array_push($productId, $product->id);
                                    @endphp
                                @endif
                            @empty

                                <div class="text-center my-4 font-bold text-xl">There is no product</div>
                            @endforelse


                        </div>
                        <div>

                        </div>
                        <div class="flex justify-end mt-2">
                            <div style="font-size: 17px;">Total : <span class="text-xl font-semibold"
                                    style="color: red;">$
                                    {{ floor($total) }}</span></div>
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
