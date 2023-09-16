<nav
    x-data="{ open: false }"
    class="border-b border-gray-100 bg-white"
    style="position: sticky; left: 0; top: 0"
>
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 w-full">
            <div class="flex justify-between">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}" style="width: 11rem">
                        <x-application-logo
                            class="block fill-current text-gray-800"
                        />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link
                        :href="route('home')"
                        :active="request()->routeIs('home')"
                    >
                        {{ __("Home") }}
                    </x-nav-link>
                    {{--
                    <x-nav-link
                        :href="route('about')"
                        :active="request()->routeIs('about')"
                    >
                        {{ __("Fashion") }}
                    </x-nav-link>
                    --}} {{--
                    <x-nav-link
                        :href="route('about')"
                        :active="request()->routeIs('about')"
                    >
                        {{ __("Shop") }}
                    </x-nav-link>
                    --}} {{--
                    <x-nav-link
                        :href="route('about')"
                        :active="request()->routeIs('about')"
                    >
                        {{ __("Home Decor") }}
                    </x-nav-link>
                    --}}

                    <x-dropdown align="left" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150 bg-white"
                                style="padding-top: 17px"
                            >
                                <div class="py-2">Shop</div>

                                <div class="ml-1">
                                    <svg
                                        class="fill-current h-4 w-4"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('fashion')">
                                {{ __("Fashion") }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('accessories')">
                                {{ __("Accessories") }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('homeDecor')">
                                {{ __("Home Decor") }}
                            </x-dropdown-link>

                            {{--
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link
                                    :href="route('logout')"
                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();"
                                >
                                    {{ __("Log Out") }}
                                </x-dropdown-link>
                            </form>
                            --}}
                        </x-slot>
                    </x-dropdown>

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
            <div class="hidden sm:flex sm:items-center sm:ml-6 relative">
                <div class="absolute left-0 flex justify-between gap-2 bg-white search-container" style="visibility: hidden; padding-right: 10px; opacity: 0; transition: all .2s ease">
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
                <a class="items" href="" style="margin-left: 1rem; transition: all .2s ease">
                    <span class="material-symbols-rounded text-2xl">
                        shopping_bag
                    </span>
                </a>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button
                    @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                >
                    <svg
                        class="h-6 w-6"
                        stroke="currentColor"
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
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link
                :href="route('home')"
                :active="request()->routeIs('home')"
            >
                {{ __("Home") }}
            </x-responsive-nav-link>

            <div
                class="block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out"
            >
                <x-dropdown align="left" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center border border-transparent leading-4 font-medium rounded-md text-gray-500 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150 bg-white"
                        >
                            <div>Shop</div>

                            <div class="ml-1">
                                <svg
                                    class="fill-current h-4 w-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('fashion')">
                            {{ __("Fashion") }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('accessories')">
                            {{ __("Accessories") }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('homeDecor')">
                            {{ __("Home Decor") }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>

            <x-responsive-nav-link
                :href="route('about')"
                :active="request()->routeIs('about')"
            >
                {{ __("About") }}
            </x-responsive-nav-link>
            <x-responsive-nav-link
                :href="route('contacts')"
                :active="request()->routeIs('contacts')"
            >
                {{ __("Contacts") }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
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
            @endguest @auth
            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __("Profile") }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                {{--
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link
                        :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();"
                    >
                        {{ __("Log Out") }}
                    </x-responsive-nav-link>
                </form>
                --}}
            </div>
            @endauth
            <x-responsive-nav-link :href="route('profile.edit')">
<div class="flex items-center gap-3">
    <span>
        Cart
    </span>                  <span class="material-symbols-rounded text-lg">
                        shopping_bag
                    </span>
</div>
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
