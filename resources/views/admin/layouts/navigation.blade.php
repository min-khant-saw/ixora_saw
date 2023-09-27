<nav class="h-screen bg-white w-max">
    <div class="w-[250px] p-7 border-b">
        @include('admin.components.logo')
    </div>
    <div class="w-full flex flex-col my-3">
        {{-- Dashboard Container --}}
        <div class="w-full flex flex-col bg-gray-100 dashboard-container">
            <div
                class="text-gray-900 flex justify-between items-center pb-2 pt-2 px-2 border-b border-white cursor-pointer select-none">
                <span class="text-base font-extrabold">Dashboard</span>
                <span class="material-symbols-rounded text-xl">
                    expand_more
                </span>
            </div>
            <ul
                class="flex flex-col gap-4 text-base justify-center {{ request()->routeIs('admin.dashboard') || request()->routeIs('admin.product') ? 'opacity-100 visible h-[100px]' : 'opacity-0 invisible h-0' }} dashboard transition-all ease-in-out duration-300 overflow-hidden">
                <a href="{{ route('admin.dashboard') }}">
                    <li class="flex items-center ml-4 pt-3 {{ request()->routeIs('admin.dashboard') ? 'pl-3' : '' }}">
                        <span class="material-symbols-rounded text-2xl mr-2">
                            home
                        </span>
                        <span
                            class="text-md {{ request()->routeIs('admin.dashboard') ? 'text-red-800 font-semibold' : '' }}">Dashboard</span>
                    </li>
                </a>
                <a href="{{ route('admin.product') }}">
                    <li class="flex items-center ml-4 py-1 {{ request()->routeIs('admin.product') ? 'pl-3' : '' }}">
                        <span class="material-symbols-rounded text-2xl mr-2">
                            category
                        </span>
                        <span
                            class="text-md {{ request()->routeIs('admin.product') ? 'text-red-800 font-semibold' : '' }}">Products</span>
                    </li>
                </a>

            </ul>
        </div>



        {{-- Application Container --}}

        <div class="w-full flex flex-col bg-gray-100 application-container mt-4">
            <div
                class="text-gray-900 flex justify-between items-center pb-2 pt-2 px-2 border-b border-white cursor-pointer select-none">
                <span class="text-base font-extrabold">Application</span>
                <span class="material-symbols-rounded text-xl">
                    expand_more
                </span>
            </div>
            <ul
                class="flex flex-col gap-4 text-base justify-center {{ request()->routeIs('admin.application.users') ? 'opacity-100 visible h-[50px]' : 'opacity-0 invisible h-0' }} application transition-all ease-in-out duration-300 overflow-hidden">
                <a href="{{ route('admin.application.users') }}">
                    <li
                        class="flex items-center ml-4 pt-3 {{ request()->routeIs('admin.application.user') ? 'pl-3' : '' }}">
                        <span class="material-symbols-rounded text-2xl mr-2">
                            group
                        </span>
                        <span
                            class="text-md {{ request()->routeIs('admin.application.users') ? 'text-red-800 font-semibold' : '' }}">Users</span>
                    </li>
                </a>
            </ul>
        </div>

    </div>
</nav>
