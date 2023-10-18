<div style="margin: 150px auto">

    <x-home-header title="Latest Products" />



    <x-product-container>

        @foreach ($latest as $product)
            @php
                $totalPrice = $product->price;
                $discountPrice = $product->discount;
                $calc = $totalPrice * ($discountPrice / 100);
                $resultPrice = $totalPrice - $calc;
            @endphp
            <x-product class="w-96 h-96" id="{{ $product->id }}" title="{{ $product->title }}"
                price="{{ $product->price }}" image="{{ $product->imageOne }}" category="{{ $product->category->title }}"
                discountPrice="{{ $product->discount }}" discount="{{ $resultPrice }}" />
        @endforeach
    </x-product-container>

</div>
</div>
