<x-app-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900 flex justify-center">
                <x-single-product>
                    @foreach ($educations as $education)
                        @php
                            $totalPrice = $education->price;
                            $discountPrice = $education->discount;
                            $calc = $totalPrice * ($discountPrice / 100);
                            $resultPrice = $totalPrice - $calc;
                        @endphp
                        <x-product class="w-80 h-80" id="{{ $education->id }}" category="{{ $education->category->title }}"
                            price="{{ $education->price }}" title="{{ $education->title }}" image="{{ $education->imageOne }}"
                            discountPrice="{{ $education->discount }}" discount="{{ $resultPrice }}" />
                    @endforeach

                </x-single-product>
            </div>
        </div>
    </div>

    <x-pagination>
        {{ $educations->links('pagination::bootstrap-4') }}
    </x-pagination>
</x-app-guest-layout>
