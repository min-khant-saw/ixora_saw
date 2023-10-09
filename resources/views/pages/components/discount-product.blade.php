@if ($discount->count())
    <div style="margin: 150px auto">
        <x-home-header title="Discount Products" />
        <x-product-container>
            @foreach ($discount as $product)
                @php
                    $totalPrice = $product->price;
                    $discountPrice = $product->discount;
                    $calc = $totalPrice * ($discountPrice / 100);
                    $resultPrice = $totalPrice - $calc;
                @endphp
                <x-product id="{{ $product->id }}" title="{{ $product->title }}" price="{{ $product->price }}"
                    image="{{ $product->image }}" category="{{ $product->category->title }}"
                    discountPrice="{{ $product->discount }}" discount="{{ $resultPrice }}" />
            @endforeach
        </x-product-container>
    </div>
@endif
