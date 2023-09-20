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
            <div
                class="shrink-0 items-center ipad-nav-icon"
                style="margin-left: 3rem"
            >
                <a href="{{ route('home') }}" style="width: 8rem">
                    <x-application-logo
                        class="block fill-current text-gray-800"
                    />
                </a>
            </div>
            <!-- Logo -->
            <div class="shrink-0 items-center hidden sm:flex desktop-nav">
                <a href="{{ route('home') }}" style="width: 11rem">
                    <x-application-logo
                        class="block fill-current text-gray-800"
                    />
                </a>
            </div>
            <div class="flex justify-between desktop-nav" style="">
                <!-- Navigation Links -->
                <div
                    class="hidden space-x-8 sm:-my-px sm:flex"
                    style="margin-left: 30px"
                >
                    <x-nav-link
                        :href="route('home')"
                        :active="request()->routeIs('home')"
                        style="font-size: 1rem"
                    >
                        {{ __("Home") }}
                    </x-nav-link>

                    <x-nav-link
                        :href="route('fashion')"
                        :active="request()->routeIs('fashion')"
                        style="font-size: 1rem"
                    >
                        {{ __("Fashion") }}
                    </x-nav-link>

                    <x-nav-link
                        :href="route('accessories')"
                        :active="request()->routeIs('accessories')"
                        style="font-size: 1rem"
                    >
                        {{ __("Acessories") }}
                    </x-nav-link>

                    <x-nav-link
                        :href="route('homeDecor')"
                        :active="request()->routeIs('homeDecor')"
                        style="font-size: 1rem"
                    >
                        {{ __("Home Decor") }}
                    </x-nav-link>

                    <x-nav-link
                        :href="route('education')"
                        :active="request()->routeIs('education')"
                        style="font-size: 1rem"
                    >
                        {{ __("Education") }}
                    </x-nav-link>

                    <x-nav-link
                        :href="route('about')"
                        :active="request()->routeIs('about')"
                        style="font-size: 1rem"
                    >
                        {{ __("About") }}
                    </x-nav-link>

                    <x-nav-link
                        :href="route('sale')"
                        :active="request()->routeIs('sale')"
                        style="font-size: 1rem"
                    >
                        {{ __("Sale") }}
                    </x-nav-link>
                    <x-nav-link
                        :href="route('contacts')"
                        :active="request()->routeIs('contacts')"
                        style="font-size: 1rem"
                    >
                        {{ __("Contacts") }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="flex items-center ml-6 relative">
                <span
                    class="items"
                    style="
                        margin-right: 0.9rem;
                        cursor: pointer;
                        user-select: none;
                        transition: all 0.2s ease;
                    "
                    ><span
                        class="material-symbols-rounded text-2xl mt-[2px] search"
                    >
                        search
                    </span></span
                >

                <a
                    class="items"
                    style="transition: all 0.2s ease"
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
                <a
                    class="items"
                    href="{{ route('cart') }}"
                    style="margin-left: 1rem; transition: all 0.2s ease"
                >
                    <span class="material-symbols-rounded text-2xl">
                        shopping_bag
                    </span>
                </a>
            </div>

            <!-- Hamburger -->
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div class="nav-mobile">
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
                :href="route('education')"
                :active="request()->routeIs('education')"
            >
                {{ __("Education") }}
            </x-responsive-nav-link>

            <x-responsive-nav-link
                :href="route('about')"
                :active="request()->routeIs('about')"
            >
                {{ __("About") }}
            </x-responsive-nav-link>
            <x-responsive-nav-link
                :href="route('sale')"
                :active="request()->routeIs('sale')"
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
        {{--
        <div
            class="pt-4 pb-1 border-t border-gray-200"
            style="margin-block: 10px"
        >
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
        </div>
        --}}
    </div>
    <div class="relative">
        <div class="w-full flex justify-center absolute top-0" style="margin: 2px auto; transition: all .4s ease-in-out">
            <div class="flex search-bar justify-center items-center" style="width: 80%; overflow: hidden; background-color: rgb(13, 11, 11)">
                <div class="w-full relative flex justify-between items-center p-2">
                    <input type="text" class="h-9 w-full text-white text-xl search-input" placeholder="Search Anything..." style="border-color: transparent; outline: transparent; box-shadow: unset; transition: all .4s ease-in-out; background-color: transparent" />
                <div
                    class="h-full close-search mt-2"
                    style="margin-top: 6px; cursor: pointer"
                >
                    <span
                        class="material-symbols-rounded text-2xl"
                        style="color: white"
                    >
                        close
                    </span>
                </div>

                </div>
                    <span
                    class="bg-white border outline flex justify-center items-center"
                    style="height: 100%; width: 50px;"
                    ><span
                        class="material-symbols-rounded text-2xl pt-2"
                    >
                        search
                    </span></span>
            </div>
        </div>
    </div>
</nav>
