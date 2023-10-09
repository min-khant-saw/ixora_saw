<x-app-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900 flex justify-center">
                <x-single-product>

                    @foreach ($accessories as $accessorie)
                        @php
                            $totalPrice = $accessorie->price;
                            $discountPrice = $accessorie->discount;
                            $calc = $totalPrice * ($discountPrice / 100);
                            $resultPrice = $totalPrice - $calc;
                        @endphp
                        <x-product id="{{ $accessorie->id }}" category="{{ $accessorie->category->title }}"
                            price="{{ $accessorie->price }}" title="{{ $accessorie->title }}"
                            image="{{ $accessorie->image }}" discountPrice="{{ $accessorie->discount }}"
                            discount="{{ $resultPrice }}" />
                    @endforeach

                </x-single-product>
            </div>
        </div>
    </div>

    <x-pagination>
        {{ $accessories->links('pagination::bootstrap-4') }}
    </x-pagination>
</x-app-guest-layout>
