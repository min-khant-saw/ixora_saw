<div class="bg-white w-full flex justify-between items-center p-3">
    <div class="relative">
        <input type="text" placeholder="Search..."
            class="rounded transition-all duration-300 border-gray-400 outline-none focus:ring-1 focus:ring-red-400 focus:outline-none focus:border-red-400 text-sm w-64 px-9">
        <div class="absolute top-0 left-1 mt-1.5">
            <span class="material-symbols-rounded text-gray-500">
                search
            </span>
        </div>
    </div>
    <div>
        <ul class="flex justify-between items-center gap-x-10 mr-5">
            <li>
                <a href="">
                    <span class="material-symbols-rounded text-gray-500 text-2xl select-none">
                        notifications
                        {{-- notification_important --}}
                    </span>
                </a>
            </li>
            <li>
                <span class="text-gray-700 font-semibold text-lg">{{ Auth::guard('admin')->user()->name }}</span>
            </li>
        </ul>
    </div>
</div>
