<nav x-transition:enter="transition duration-200 ease-in-out transform sm:duration-500"
x-transition:enter-start="-translate-y-full opacity-0"
x-transition:enter-end="translate-y-0 opacity-100"
x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500"
x-transition:leave-start="translate-y-0 opacity-100"
x-transition:leave-end="-translate-y-full opacity-0" x-show="isMobileSubMenuOpen"
@click.away="isMobileSubMenuOpen = false"
class="absolute flex items-center p-4 bg-white rounded-md shadow-lg dark:bg-darker top-16 inset-x-4 md:hidden"
aria-label="Secondary">
<div class="space-x-2">
    <!-- Toggle dark theme button -->
    <button aria-hidden="true" class="relative focus:outline-none" x-cloak
        @click="toggleTheme">
        <div
            class="w-12 h-6 transition rounded-full outline-none bg-primary-100 dark:bg-primary-lighter">
        </div>
        <div class="absolute top-0 left-0 inline-flex items-center justify-center w-6 h-6 transition-all duration-200 transform scale-110 rounded-full shadow-sm"
            :class="{ 'translate-x-0 -translate-y-px  bg-white text-primary-dark': !isDark, 'translate-x-6 text-primary-100 bg-primary-darker': isDark }">
            <svg x-show="!isDark" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
            </svg>
            <svg x-show="isDark" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
            </svg>
        </div>
    </button>



    <!-- Settings button -->
    <button @click="openSettingsPanel(); $nextTick(() => { isMobileSubMenuOpen = false })"
        class="p-2 transition-colors duration-200 rounded-full text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-dark focus:outline-none focus:bg-primary-100 dark:focus:bg-primary-dark focus:ring-primary-darker">
        <span class="sr-only">Open settings panel</span>
        <svg class="w-7 h-7" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
    </button>
</div>

<!-- User avatar button -->
<div class="relative ml-auto" x-data="{ open: false }">
    <button @click="open = !open" type="button" aria-haspopup="true"
        :aria-expanded="open ? 'true' : 'false'"
        class="block transition-opacity duration-200 rounded-full dark:opacity-75 dark:hover:opacity-100 focus:outline-none focus:ring dark:focus:opacity-100">
        <span class="sr-only">Menú de Usuario</span>
        <img class="w-10 h-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->first_name }}" />
    </button>

    <!-- User dropdown menu -->
    <div x-show="open" x-transition:enter="transition-all transform ease-out"
        x-transition:enter-start="translate-y-1/2 opacity-0"
        x-transition:enter-end="translate-y-0 opacity-100"
        x-transition:leave="transition-all transform ease-in"
        x-transition:leave-start="translate-y-0 opacity-100"
        x-transition:leave-end="translate-y-1/2 opacity-0" @click.away="open = false"
        class="absolute right-0 w-48 py-1 origin-top-right bg-white rounded-md shadow-lg top-12 ring-1 ring-black ring-opacity-5 dark:bg-dark"
        role="menu" aria-orientation="vertical" aria-label="User menu">
        <a href="#" role="menuitem"
            class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-primary">
            {{ __('Perfil') }}
        </a>

        <div class="border-t border-gray-100"></div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a role="menuitem" class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-primary" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                <span>{{ __('Cerrar Sesión') }}</span>
            </a>
        </form>
    </div>
</div>
</nav>
