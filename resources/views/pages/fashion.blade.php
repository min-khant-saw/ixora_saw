<x-app-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900 flex justify-center">
                <x-single-product>

                    @foreach ($fashions as $fashion)
                        @php
                            $totalPrice = $fashion->price;
                            $discountPrice = $fashion->discount;
                            $calc = $totalPrice * ($discountPrice / 100);
                            $resultPrice = $totalPrice - $calc;
                        @endphp
                        <x-product id="{{ $fashion->id }}" category="{{ $fashion->category->title }}"
                            price="{{ $fashion->price }}" title="{{ $fashion->title }}" image="{{ $fashion->image }}"
                            discountPrice="{{ $fashion->discount }}" discount="{{ $resultPrice }}" />
                    @endforeach


                </x-single-product>
            </div>
        </div>
    </div>

    <x-pagination>
        {{ $fashions->links('pagination::bootstrap-4') }}
    </x-pagination>
</x-app-guest-layout>
