<div style="margin: 160px auto">


<x-home-header title="Trending Products"/>
<x-product-container>
        @foreach ($latest as $product)
            <x-product id="{{ $product->id }}" title="{{ $product->title }}" price="{{ $product->price }}"
                image="{{ $product->image }}" category="{{ $product->category->title }}" />
        @endforeach
    </x-product-container>

</div>