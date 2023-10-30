<x-app-guest-layout>
    <div class="py-12">
    <div class="sm:px-6 lg:px-8 flex max-lg:flex-col flex-row justify-start gap-x-6">
            @if ($homeDecors->count())
                <div class="mb-8 flex justify-center flex-col gap-x-2 gap-y-5">
                    <h1 class="text-xl font-semibold text-center">Product Type</h1>
                    <div class="flex justify-center items-center gap-x-2">
                        <input type="checkbox" name="kitchen" id="kitchen">
                        <label for="kitchen">Kitchen</label>
                    </div>
                    <div class="flex justify-center items-center gap-x-2">
                        <input type="checkbox" name="home-display" id="home-display">
                        <label for="home-display">Home Display</label>
                    </div>
                    <div class="flex justify-center items-center gap-x-2">
                        <input type="checkbox" name="wall-art" id="wall-art">
                        <label for="wall-art">Wall art</label>
                    </div>
                </div>
            @endif
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
