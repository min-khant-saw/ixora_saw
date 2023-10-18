            @php
                $url = $_SERVER['REQUEST_URI'];
                $pathSegments = collect(explode('/', parse_url($url, PHP_URL_PATH)));
                $lastSegment = $pathSegments->last();
                
                $request = request();
                $path = $request->path(); // Get the path portion of the URL
                $productType = str_after($path, 'product/'); // Get the part after "product/"
                
            @endphp

            <x-admin.admin-layout>
                <div class="w-full">
                    <div class="flex justify-center">

                        <a href="{{ route('admin.product') }}"
                            class="flex flex-col justify-center gap-y-2 w-48 h-32 text-center mx-3 mb-4 rounded cursor-pointer transition-all duration-300 hover:scale-105 {{ $lastSegment === 'product' || $productType === 'product/old' ? 'bg-red-400 text-white' : 'bg-white' }}"
                            onclick="{{ $type = 'Fashions' }}">
                            <span class="text-xl font-semibold border-b pb-2">Fashions</span>
                            <span class="text-xl font-semibold font-mono pt-1">{{ $fashionCount }}</span>
                        </a>
                        <a href="{{ route('admin.product', ['productType' => 'accessorie']) }}"
                            class="flex flex-col justify-center gap-y-2 w-48 h-32 text-center mx-3 mb-4 rounded cursor-pointer transition-all duration-300 hover:scale-105 {{ $lastSegment === 'accessorie' || $productType === 'accessorie/old' ? 'bg-red-400 text-white' : 'bg-white' }}"
                            onclick="{{ $type = 'Accessories' }}">
                            <span class="text-xl font-semibold border-b pb-2">Accessories</span>
                            <span class="text-xl font-semibold font-mono pt-1">{{ $accessorieCount }}</span>
                        </a>
                        <a href="{{ route('admin.product', ['productType' => 'home-decor']) }}"
                            class="flex flex-col justify-center gap-y-2 w-48 h-32 text-center mx-3 mb-4 rounded cursor-pointer transition-all duration-300 hover:scale-105 {{ $lastSegment === 'home-decor' || $productType === 'home-decor/old' ? 'bg-red-400 text-white' : 'bg-white' }}"
                            onclick="{{ $type = 'Home Decors' }}">
                            <span class="text-xl font-semibold border-b pb-2">Home Decors</span>
                            <span class="text-xl font-semibold font-mono pt-1">{{ $homeDecorCount }}</span>
                        </a>
                        <a href="{{ route('admin.product', ['productType' => 'education']) }}"
                            class="flex flex-col justify-center gap-y-2 w-48 h-32 text-center mx-3 mb-4 rounded cursor-pointer transition-all duration-300 hover:scale-105 {{ $lastSegment === 'education' || $productType === 'education/old' ? 'bg-red-400 text-white' : 'bg-white' }}"
                            onclick="{{ $type = 'Educations' }}">
                            <span class="text-xl font-semibold border-b pb-2">Educations</span>
                            <span class="text-xl font-semibold font-mono pt-1">{{ $educationCount }}</span>
                        </a>
                    </div>

                    <div class="max-w-6xl mx-auto mt-4">
                        <h1 class="text-lg font-semibold">List > {{ $category }}</h1>



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
                                                                    <a href="{{ $lastSegment !== 'old' ? route('admin.product', ['productType' => $lastSegment, 'sort' => 'old']) : '' }}"
                                                                        tabindex="0"
                                                                        class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"
                                                                        role="menuitem">Oldest</a>
                                                                    <a href="{{ route('admin.product') }}"
                                                                        tabindex="1"
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
                                                <tbody class="text-sm divide-y divide-gray-100 w-full max-h-[600px]">


                                                    @foreach ($products as $product)
                                                        <tr class="w-full">
                                                            <x-admin.product-table title="{{ $product->title }}"
                                                                price="{{ $product->price }}"
                                                                image="{{ $product->imageOne }}"
                                                                id="{{ $product->id }}" />
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>



                    </div>
                </div>
                {{ $products->links('pagination::bootstrap-4') }}


            </x-admin.admin-layout>
