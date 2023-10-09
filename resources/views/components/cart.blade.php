<div>



    <!-- Product #1 -->
    <div class="item">
        <form class="buttons" action="{{ route('cart.delete', ['id' => $id]) }}" method="POST">
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
            <button class="plus-btn" type="button" name="button">
                <span class="material-symbols-rounded">
                    add
                </span>
            </button>
            <span style="margin-top: 2px;">1</span>
            <button class="minus-btn" type="button" name="button">
                <span class="material-symbols-rounded">
                    remove
                </span>
            </button>
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
