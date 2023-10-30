<x-app-guest-layout>
    <div class="py-12">
        <div class="sm:px-6 lg:px-8 flex max-lg:flex-col flex-row justify-start gap-x-6">
            {{-- @if ($educations->count())
                <div class="mb-8 flex justify-center flex-col gap-x-2 gap-y-5">
                    <h1 class="text-xl font-semibold text-center">Product Type</h1>
                    <div class="flex justify-center items-center gap-x-2">
                        <input type="checkbox" name="rattan" id="rattan">
                        <label for="rattan">Rattan</label>
                    </div>
                    <div class="flex justify-center items-center gap-x-2">
                        <input type="checkbox" name="bamboo" id="bamboo">
                        <label for="bamboo">Bamboo</label>
                    </div>
                    <div class="flex justify-center items-center gap-x-2">
                        <input type="checkbox" name="embroidery" id="embroidery">
                        <label for="embroidery">Embroidery</label>
                    </div>
                </div>
            @endif --}}
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
                            price="{{ $education->price }}" title="{{ $education->title }}"
                            image="{{ $education->imageOne }}" discountPrice="{{ $education->discount }}"
                            discount="{{ $resultPrice }}" />
                    @endforeach

                </x-single-product>
            </div>
        </div>
    </div>

    <x-pagination>
        {{ $educations->links('pagination::bootstrap-4') }}
    </x-pagination>
</x-app-guest-layout>
