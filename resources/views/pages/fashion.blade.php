<x-app-guest-layout>
    <div class="py-12 relative">
        <div class="sm:px-6 lg:px-8 flex max-lg:flex-col flex-row justify-start gap-x-6">
            @if ($fashions->count())
                <div class="mb-8 flex justify-center flex-col gap-x-2 gap-y-5">
                    <h1 class="text-xl font-semibold text-center">Product Type</h1>
                    <a class="flex justify-center items-center gap-x-2" href="{{ route('fashion') }}">
                        <input type="radio" {{ url()->current() === route('fashion') ? 'checked' : '' }} name="type"
                            id="all" onclick="fashion()">
                        <label for="all">All Fashions</label>
                    </a>
                    <a class="flex justify-center items-center gap-x-2"
                        href="{{ route('fashion', ['type' => 'bags']) }}">
                        <input type="radio"
                            {{ url()->current() === route('fashion', ['type' => 'bags']) ? 'checked' : '' }}
                            name="type" id="bags" onclick="bags()">
                        <label for="bags">Bags</label>
                    </a>
                    <a class="flex justify-center items-center gap-x-2"
                        href="{{ route('fashion', ['type' => 'shawls']) }}">
                        <input type="radio"
                            {{ url()->current() === route('fashion', ['type' => 'shawls']) ? 'checked' : '' }}
                            name="type" id="shawls" onclick="shawls()">
                        <label for="shawls">Shawls</label>
                    </a>
                </div>
            @endif
            <div class="p-6 text-gray-900 flex justify-center">
                <x-single-product>

                    @foreach ($fashions as $fashion)
                        @php
                            $totalPrice = $fashion->price;
                            $discountPrice = $fashion->discount;
                            $calc = $totalPrice * ($discountPrice / 100);
                            $resultPrice = $totalPrice - $calc;
                        @endphp
                        <x-product class="w-80 h-80" id="{{ $fashion->id }}" category="{{ $fashion->category->title }}"
                            price="{{ $fashion->price }}" title="{{ $fashion->title }}"
                            image="{{ $fashion->imageOne }}" discountPrice="{{ $fashion->discount }}"
                            discount="{{ $resultPrice }}" />
                    @endforeach


                </x-single-product>
            </div>
        </div>
    </div>


    <script>
        const bags = () => {
            window.location.href = "{{ route('fashion', ['type' => 'bags']) }}"
        }

        const shawls = () => {
            window.location.href = "{{ route('fashion', ['type' => 'shawls']) }}"
        }

        const fashion = () => {
            window.location.href = "{{ route('fashion') }}"
        }
    </script>

    <x-pagination>
        {{ $fashions->links('pagination::bootstrap-4') }}
    </x-pagination>
</x-app-guest-layout>
