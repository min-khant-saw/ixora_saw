<x-admin.admin-layout>

    <section class="w-full mx-auto rounded-md mt-5 px-10">
        <h1 class="text-3xl font-bold text-center">Category</h1>
        <div>
            <form class="flex justify-center flex-col gap-y-4" action="{{ route('admin.category.create') }}"
                enctype="multipart/form-data" method="POST">

                @csrf
                @method('post')

                <div>

                    <label for="category">Category</label>
                    <select id="category" name="title"
                        class="block w-full px-4 py-2 mt-2 border-none focus:ring-2 focus:ring-red-600 rounded transition-all">
                        <option value="Fashion">Fashion</option>
                        <option value="Accessorie">Accessorie</option>
                        <option value="Home Decor">Home Decor</option>
                        <option value="Education">Education</option>
                    </select>
                </div>


                <div class="w-full">
                    <label class="block text-sm font-medium"> Image One </label>
                    <div
                        class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12" stroke="currentColor" fill="none" viewBox="0 0 48 48"
                                aria-hidden="true">
                                <path
                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-sm text-gray-600">
                                <label for="image" class="relative cursor-pointer rounded-md font-medium">
                                    <span class="">Upload a file</span>
                                    <input id="image" name="image" type="file" class="sr-only" />
                                </label>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="flex justify-center mt-6">
                    <button type="submit"
                        class="px-8 py-2.5 leading-5 text-white transition-colors duration-200 bg-black rounded">
                        Save
                    </button>
                </div>

            </form>



        </div>

    </section>



</x-admin.admin-layout>
