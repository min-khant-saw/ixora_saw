<x-app-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900 flex justify-center">
                <x-single-product>

                    @foreach ($homeDecors as $homeDecor)
                        @php
                            $totalPrice = $homeDecor->price;
                            $discountPrice = $homeDecor->discount;
                            $calc = $totalPrice * ($discountPrice / 100);
                            $resultPrice = $totalPrice - $calc;
                        @endphp
                        <x-product class="w-80 h-80" id="{{ $homeDecor->id }}" category="{{ $homeDecor->category->title }}"
                            price="{{ $homeDecor->price }}" title="{{ $homeDecor->title }}" image="{{ $homeDecor->imageOne }}"
                            discountPrice="{{ $homeDecor->discount }}" discount="{{ $resultPrice }}" />
                    @endforeach


                </x-single-product>
            </div>
        </div>
    </div>

    <x-pagination>
        {{ $homeDecors->links('pagination::bootstrap-4') }}
    </x-pagination>
</x-app-guest-layout>
