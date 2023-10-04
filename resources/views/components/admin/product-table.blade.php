<tr class="w-full">
    <td class="p-2 whitespace-nowrap">
        <div class="flex items-center">
            <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full w-full h-full object-cover"
                    src="{{ asset('storage/' . $image) }}" width="40" height="40" alt="{{ $image }}"></div>
        </div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-left">{{ $title }}</div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-left font-medium text-green-500">{{ $price }}</div>
    </td>
    <td class="p-2 whitespace-nowrap flex justify-center gap-x-3 items-center mt-1">
        <div>
            <a href="{{ route('admin.product.edit', ['id' => $id]) }}">
                <span class="material-symbols-rounded">
                    edit
                </span>
            </a>
        </div>
        <div>
            <form method="POST" action="{{ route('admin.product.delete', ['id' => $id]) }}">
                @csrf
                @method('delete')
                <button class="material-symbols-rounded inline" type="submit">
                    delete
                </button>
            </form>
        </div>
    </td>
</tr>
