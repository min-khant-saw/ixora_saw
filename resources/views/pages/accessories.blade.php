<x-app-guest-layout>
    <div class="py-12">
        <div class="sm:px-6 lg:px-8 flex max-lg:flex-col flex-row justify-start gap-x-6">
            @if ($accessories->count())
                <div class="mb-8 flex justify-center flex-col gap-x-2 gap-y-5">
                    <h1 class="text-xl font-semibold text-center">Product Type</h1>
                    <a class="flex justify-center items-center gap-x-2" href="{{ route('accessories') }}">
                        <input type="radio" {{ url()->current() === route('accessories') ? 'checked' : '' }}
                            name="type" id="all" onclick="fashion()">
                        <label for="all">All Accessories</label>
                    </a>
                    <a class="flex justify-center items-center gap-x-2"
                        href="{{ route('accessories', ['type' => 'jewelry']) }}">
                        <input type="radio"
                            {{ url()->current() === route('accessories', ['type' => 'jewelry']) ? 'checked' : '' }}
                            name="type" id="jewelry" onclick="jewelry()">
                        <label for="jewelry">Jewelry</label>
                    </a>

                    <div class="flex justify-center items-center gap-x-2">
                        <input type="radio" name="type" id="keychain" onclick="keychain()"
                            {{ url()->current() === route('accessories', ['type' => 'keychain']) ? 'checked' : '' }}>
                        <label for="keychain">Keychain</label>
                    </div>
                </div>
            @endif
            <div class="p-6 text-gray-900 flex justify-center">
                <x-single-product>

                    @foreach ($accessories as $accessorie)
                        @php
                            $totalPrice = $accessorie->price;
                            $discountPrice = $accessorie->discount;
                            $calc = $totalPrice * ($discountPrice / 100);
                            $resultPrice = $totalPrice - $calc;
                        @endphp
                        <x-product class="w-80 h-80" id="{{ $accessorie->id }}"
                            category="{{ $accessorie->category->title }}" price="{{ $accessorie->price }}"
                            title="{{ $accessorie->title }}" image="{{ $accessorie->imageOne }}"
                            discountPrice="{{ $accessorie->discount }}" discount="{{ $resultPrice }}" />
                    @endforeach

                </x-single-product>
            </div>
        </div>
    </div>

    <x-pagination>
        {{ $accessories->links('pagination::bootstrap-4') }}
    </x-pagination>
    <script>
        const jewelry = () => {
            window.location.href = "{{ route('accessories', ['type' => 'jewelry']) }}"
        }

        const keychain = () => {
            window.location.href = "{{ route('accessories', ['type' => 'keychain']) }}"
        }

        const fashion = () => {

            window.location.href = "{{ route('accessories') }}"
        }
    </script>
</x-app-guest-layout>
