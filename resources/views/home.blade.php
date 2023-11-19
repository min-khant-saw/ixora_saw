<x-app-guest-layout>
    {{-- <x-slot name="header">
        <h2 class="font-normal text-xl text-white leading-tight text-center">
            {{ __('Free shipping over $50') }}
        </h2>
    </x-slot> --}}


    @include('pages.components.header')
    @include('pages.components.categories')
    @include('pages.components.new-product')
    @include('pages.components.trending-product')
    @include('pages.components.discount-product')

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>

</x-app-guest-layout>
