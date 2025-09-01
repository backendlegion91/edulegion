<header class="bg-white shadow px-4 py-3 flex justify-between items-center border-b">
    {{-- Hamburger for mobile --}}
    <button @click="sidebarOpen = !sidebarOpen" class="md:hidden text-gray-600 focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
    </button>

    {{-- Spacer (optional) --}}
    <div></div>

    {{-- Profile Dropdown --}}
    <div class="relative" x-data="{ open: false }" @keydown.escape.window="open = false">
        <button @click="open = !open" class="flex items-center space-x-2 focus:outline-none">
            <span class="text-sm text-gray-700">Hi, {{ Auth::user()->name }}</span>
            <img src="{{ Auth::user()->profile_photo_url ?? '/default-avatar.png' }}"
                 class="w-9 h-9 rounded-full border-2 border-blue-500 hover:ring-2 hover:ring-blue-300" />
        </button>

        <div x-show="open"
             @click.outside="open = false"
             x-transition
             class="absolute right-0 mt-2 w-56 bg-white border border-blue-200 rounded-md shadow-lg z-50"
             style="display: none;">
            <div class="px-4 py-3 border-b text-sm">
                <div class="font-semibold">{{ Auth::user()->name }}</div>
                <div class="text-xs text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <a href="#" class="block px-4 py-2 text-sm text-blue-700 hover:bg-blue-50">Settings</a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                        class="block w-full px-4 py-2 text-sm text-red-600 hover:bg-blue-50 text-left">
                    Logout
                </button>
            </form>
        </div>
    </div>
</header>
