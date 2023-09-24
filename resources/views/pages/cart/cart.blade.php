<x-app-guest-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="shopping-cart">
                        <!-- Title -->
                        <div class="title text-center text-xl">
                            Shopping Bag
                        </div>
                        <x-cart />
                        <x-cart />
                        <x-cart />
                        <x-cart />
                        <x-cart />
                    </div>
                    <div>

                    </div>
                    <div class="flex justify-end mt-2">
                        <div style="font-size: 17px;">Total : <span class="text-xl font-semibold" style="color: red;">$9999</span></div>
                    </div>
                    <div class="flex justify-end mt-2"><a href="" class="text-white font-semibold" style="background-color: black; padding: .4rem;">
                        Checkout
                    </a></div>
                </div>
            </div>
        </div>
    </div>


</x-app-guest-layout>