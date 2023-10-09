<x-admin.admin-layout>
    <section class="w-full mx-auto rounded-md mt-5 px-10">
        <h1 class="text-xl font-bold mb-7">Edit Product</h1>
        <form method="POST" action="{{ route('admin.product.update', ['id' => $product->id]) }}"
            enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-1">
                <div>
                    <label class="" for="title">Title</label>
                    <input id="title" type="text" name="title" value="{{ $product->title }}"
                        class="block w-full px-4 py-2 mt-2 border-none focus:ring-2 focus:ring-red-600 rounded transition-all">
                </div>

                <div class="flex justify-center">
                    <div class="w-full flex justify-center flex-col gap-y-5">
                        <div>
                            <label class="" for="price">Price</label>
                            <input id="price" type="number" name="price" value="{{ $product->price }}"
                                class="block w-full px-4 py-2 mt-2 border-none focus:ring-2 focus:ring-red-600 rounded transition-all">
                        </div>

                        <div>
                            <label class="" for="discount">Discount</label>
                            <select name="discount" id="discount"
                                class="block w-full px-4 py-2 mt-2 border-none focus:ring-2 focus:ring-red-600 rounded transition-all">
                                <option value="0" selected>
                                    none</option>
                                <option value="100">
                                    100%</option>
                                <option value="80">80%</option>
                                <option value="50">50%</option>
                                <option value="30">30%</option>
                                <option value="10">10%</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="" for="category">Categorys</label>
                    <select name="category" id="category"
                        class="block w-full px-4 py-2 mt-2 border-none focus:ring-2 focus:ring-red-600 rounded transition-all">
                        <option value="Fashion" @selected($product->category->title === 'Fashion' ? true : false)>
                            Fashion</option>
                        <option value="Accessorie" @selected($product->category->title === 'Accessorie' ? true : false)>Accessorie</option>
                        <option value="Home Decor" @selected($product->category->title === 'Home Decor' ? true : false)>Home Decor</option>
                        <option value="Education" @selected($product->category->title === 'Education' ? true : false)>Education</option>
                    </select>
                </div>
                <div>
                    <label class="" for="description">Information</label>
                    <textarea id="textarea" type="textarea" name="description"
                        class="block w-full px-4 py-2 mt-2 border-none focus:ring-2 focus:ring-red-600 rounded transition-all">{{ $product->description }}</textarea>
                </div>
                <div class="w-full">
                    <label class="block text-sm font-medium">
                        Image
                    </label>
                    <div
                        class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md relative h-72">
                        <img class="w-full h-full object-cover" src="{{ asset("storage/$product->image") }}"
                            alt="{{ asset("storage/$product->image") }}">
                        <div
                            class="space-y-1 text-center w-full absolute top-1/2 -translate-y-3 flex justify-center flex-col items-center">
                            <svg class="mx-auto h-12 w-12" stroke="currentColor" fill="none" viewBox="0 0 48 48"
                                aria-hidden="true">
                                <path
                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-sm text-gray-600">
                                <label for="image" class="relative cursor-pointer rounded-md font-medium">
                                    <span class="">Upload a file</span>
                                    <input id="image" name="image" type="file" class="sr-only">
                                </label>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-6">
                <button type="submit"
                    class="px-8 py-2.5 leading-5 text-white transition-colors duration-200 bg-black rounded">Save</button>
            </div>
        </form>
    </section>
</x-admin.admin-layout>
