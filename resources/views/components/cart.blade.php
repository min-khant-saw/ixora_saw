<div>



    <!-- Product #1 -->
    <div class="item">
        <form class="buttons" action="{{ route('carts.delete', ['id' => $ids]) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">
                <span class="material-symbols-rounded select-none cursor-pointer">
                    delete
                </span>
            </button>
        </form>

        <div class="image">
            <img src="{{ asset('storage/' . $image) }}" alt="" />
        </div>

        <div class="description">
            <span class="text-lg">{{ $title }}</span>
            <span>{{ $category }}</span>
        </div>

        <div class="quantity flex justify-center" style="gap: 15px;">
            <form action="{{ route('cart.add', ['id' => $productId]) }}" method="post">
                @csrf
                @method('post')
                <button type="submit" class="plus-btn" name="button">
                    <span class="material-symbols-rounded">
                        add
                    </span>
                </button>
            </form>
            <span style="margin-top: 2px;">{{ $totalProduct }}</span>
            <form action="{{ route('cart.delete', ['id' => $id]) }}" method="post">
                @csrf
                @method('delete')
                <button class="minus-btn" type="submit" name="button">
                    <span class="material-symbols-rounded">
                        remove
                    </span>
                </button>
            </form>

        </div>

        <div class="flex gap-x-2 w-40 justify-center">
            <div class="total-price {{ $discountPrice > 0 ? 'line-through' : '' }}">$ {{ $price }}</div>

            <div class="total-price">
                @if ($discountPrice > 0)
                    $ {{ ceil($discount) }}
                @endif
            </div>
        </div>
    </div>
</div>
