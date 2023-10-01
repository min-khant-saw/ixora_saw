<x-admin.admin-layout>
    <div class="w-full">
        <div class="flex justify-center">
            <div
                class="flex flex-col justify-center gap-y-2 w-48 h-32 text-center mx-3 mb-4 rounded cursor-pointer transition-all duration-300 hover:scale-105 bg-red-400">
                <span class="text-xl font-semibold border-b pb-2 text-white">Fashions</span>
                <span class="text-xl font-semibold font-mono pt-1 text-white">32</span>
            </div>
            <div
                class="flex flex-col justify-center gap-y-2 w-48 h-32 text-center bg-white mx-3 mb-4 rounded cursor-pointer transition-all duration-300 hover:scale-105">
                <span class="text-xl font-semibold border-b pb-2">Accessories</span>
                <span class="text-xl font-semibold font-mono pt-1 text-gray-600">50</span>
            </div>
            <div
                class="flex flex-col justify-center gap-y-2 w-48 h-32 text-center bg-white mx-3 mb-4 rounded cursor-pointer transition-all duration-300 hover:scale-105">
                <span class="text-xl font-semibold border-b pb-2">Home Decors</span>
                <span class="text-xl font-semibold font-mono pt-1 text-gray-600">30</span>
            </div>
            <div
                class="flex flex-col justify-center gap-y-2 w-48 h-32 text-center bg-white mx-3 mb-4 rounded cursor-pointer transition-all duration-300 hover:scale-105">
                <span class="text-xl font-semibold border-b pb-2">Educations</span>
                <span class="text-xl font-semibold font-mono pt-1 text-gray-600">45</span>
            </div>
        </div>

        <div class="max-w-6xl mx-auto mt-4">
            <h1 class="text-lg font-semibold">List > Fashions</h1>



            <!-- component -->
            <section class="antialiased bg-gray-100 text-gray-600 py-3">
                <div class="flex flex-col justify-center h-full">
                    <!-- Table -->
                    <div class="w-full mx-auto bg-white">
                        <header class="px-5 py-4 border-b flex justify-between items-center">
                            <h2 class="font-semibold text-gray-800">Products</h2>
                            <div class="">
                                <div class="bg-white flex flex-col justify-center">
                                    <div class="flex items-center justify-center">
                                        <div class="inline-block text-left dropdown">
                                            <span class="rounded-md shadow-sm"><button
                                                    class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800"
                                                    type="button" aria-haspopup="true" aria-expanded="true"
                                                    aria-controls="headlessui-menu-items-117">
                                                    <span>Options</span>
                                                    <svg class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </button></span>
                                            <div
                                                class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95">
                                                <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                                                    aria-labelledby="headlessui-menu-button-1"
                                                    id="headlessui-menu-items-117" role="menu">
                                                    <div class="py-1">
                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"
                                                            role="menuitem">Oldest</a>
                                                        <a href="javascript:void(0)" tabindex="1"
                                                            class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"
                                                            role="menuitem">Latest</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <div class="p-3">
                            <div class="overflow-x-auto">
                                <table class="table-auto w-full">
                                    <thead class="text-xs font-semibold uppercase text-gray-400">
                                        <tr>
                                            <th class="p-2 whitespace-nowrap">
                                                <div class="font-semibold text-left">Photo</div>
                                            </th>
                                            <th class="p-2 whitespace-nowrap">
                                                <div class="font-semibold text-left">Title</div>
                                            </th>
                                            <th class="p-2 whitespace-nowrap">
                                                <div class="font-semibold text-left">Price</div>
                                            </th>
                                            <th class="p-2 whitespace-nowrap">
                                                <div class="font-semibold text-center">Action</div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-sm divide-y divide-gray-100 w-full h-[600px]">
                                        <x-admin.product-table />
                                        <x-admin.product-table />
                                        <x-admin.product-table />
                                        <x-admin.product-table />
                                        <x-admin.product-table />
                                        <x-admin.product-table />
                                        <x-admin.product-table />
                                        <x-admin.product-table />
                                        <x-admin.product-table />
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



        </div>
    </div>
</x-admin.admin-layout>
