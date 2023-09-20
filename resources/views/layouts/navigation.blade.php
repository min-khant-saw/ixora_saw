<nav
    x-data="{ open: false }"
    class="border-b border-gray-100 bg-white z-50"
    style="position: sticky; left: 0; top: 0"
>
    <!-- Primary Navigation Menu -->
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 w-full">
            <div class="-mr-2 flex items-center sm:hidden hamburger">
                <button
                    @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                >
                    <svg
                        class="h-6 w-6"
                        stroke="red"
                        fill="none"
                        viewBox="0 0 24 24"
                    >
                        <path
                            :class="{'hidden': open, 'inline-flex': ! open }"
                            class="inline-flex"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                        <path
                            :class="{'hidden': ! open, 'inline-flex': open }"
                            class="hidden"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        />
                    </svg>
                </button>
            </div>
            <div class="shrink-0 items-center flex sm:hidden" style="margin-left: 5rem">
                <a href="{{ route('home') }}" style="width: 10rem">
                    <x-application-logo
                        class="block fill-current text-gray-800"
                    />
                </a>
            </div>
            <div class="flex justify-between" style="">
                <!-- Logo -->
                <div class="shrink-0 items-center hidden sm:flex">
                    <a href="{{ route('home') }}" style="width: 11rem">
                        <x-application-logo
                            class="block fill-current text-gray-800"
                        />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:flex" style="margin-left: 30px">
                    <x-nav-link
                        :href="route('home')"
                        :active="request()->routeIs('home')"
                    >
                        {{ __("Home") }}
                    </x-nav-link>
         
                    <x-nav-link
                        :href="route('fashion')"
                        :active="request()->routeIs('fashion')"
                    >
                        {{ __("Fashion") }}
                    </x-nav-link>

                    <x-nav-link
                    :href="route('accessories')"
                    :active="request()->routeIs('accessories')"
                >
                    {{ __("Acessories") }}
                </x-nav-link>
            
                    <x-nav-link
                        :href="route('homeDecor')"
                        :active="request()->routeIs('homeDecor')"
                    >
                        {{ __("Home Decor") }}
                    </x-nav-link>
                    

                    <x-nav-link
                        :href="route('about')"
                        :active="request()->routeIs('about')"
                    >
                        {{ __("Blog") }}
                    </x-nav-link>
                    <x-nav-link
                        :href="route('contacts')"
                        :active="request()->routeIs('contacts')"
                    >
                        {{ __("Contacts") }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="flex items-center ml-6 relative">
                <div class="absolute right-0 flex justify-between gap-2 bg-white search-container" style="visibility: hidden; padding-right: 10px; opacity: 0; transition: all .2s ease">
                    <div class="relative flex">
                        <input type="text" class="rounded h-9 bg-slate-400">
                        <div class="absolute right-0 mr-9 h-full close-search" style="margin-top: 6px; cursor: pointer">
                            <span class="material-symbols-rounded text-xl" style="color: darkslategray">
                                close
                            </span>
                        </div>
                    </div>
                </div>
                <span class="items" style="margin-right: 0.9rem; cursor: pointer; user-select: none; transition: all .2s ease"
                    ><span class="material-symbols-rounded text-2xl mt-[2px] search">
                        search
                    </span></span
                >

                <a class="items" style="transition: all .2s ease"
                    href="{{Auth::check() ? route('profile.edit') : route('login')}}"
                >
                    @if (request()->routeIs('profile.edit'))
                    <span class="material-symbols-rounded"> person </span>
                    @else
                    <span class="material-symbols-rounded text-2xl">
                        person
                    </span>
                    @endif
                </a>
                <a class="items" href="{{route('cart')}}" style="margin-left: 1rem; transition: all .2s ease">
                    <span class="material-symbols-rounded text-2xl">
                        shopping_bag
                    </span>
                </a>
            </div>

            <!-- Hamburger -->
            
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1 flex flex-col" style="row-gap: 8px">
            <x-responsive-nav-link
                :href="route('home')"
                :active="request()->routeIs('home')"
            >
                {{ __("Home") }}
            </x-responsive-nav-link>

            <x-responsive-nav-link
            :href="route('fashion')"
            :active="request()->routeIs('fashion')"
        >
            {{ __("Fashion") }}
        </x-responsive-nav-link>

        <x-responsive-nav-link
        :href="route('accessories')"
        :active="request()->routeIs('accessories')"
    >
        {{ __("Accessories") }}
    </x-responsive-nav-link>


    <x-responsive-nav-link
    :href="route('homeDecor')"
    :active="request()->routeIs('homeDecor')"
>
    {{ __("Home Decor") }}
</x-responsive-nav-link>

<x-responsive-nav-link
:href="route('about')"
:active="request()->routeIs('about')"
>
{{ __("About") }}
</x-responsive-nav-link>
<x-responsive-nav-link
:href="route('about')"
:active="request()->routeIs('about')"
>
{{ __("Sale") }}
</x-responsive-nav-link>
            <x-responsive-nav-link
                :href="route('contacts')"
                :active="request()->routeIs('contacts')"
            >
                {{ __("Contacts") }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        {{-- <div class="pt-4 pb-1 border-t border-gray-200" style="margin-block: 10px">
            @auth
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">
                    {{ Auth::user()->name }}
                </div>
                <div class="font-medium text-sm text-gray-500">
                    {{ Auth::user()->email }}
                </div>
            </div>
            @endauth @guest
            <x-responsive-nav-link
                :href="route('login')"
                :active="request()->routeIs('login')"
            >
                {{ __("Login") }}
            </x-responsive-nav-link>
            @endguest
        </div> --}}
    </div>
</nav>
