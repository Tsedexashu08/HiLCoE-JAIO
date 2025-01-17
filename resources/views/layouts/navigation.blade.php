<link rel="stylesheet" href="{{ asset('css/navigation-bar.css') }}">
<style>
    nav {
        position: relative;
        z-index: 10;
        width: 100%;
    }
</style>
<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>
            </div>
            <h1>HiLCoE JAIO</h1>
            <!-- Settings Dropdown -->

            <div class="hidden sm:flex sm:flex-col sm:items-center sm:ms-6 hover-border ml-32">
                <x-dropdown align="right" width="50%" z-index='20'>
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="Profile Picture"
                                class="profilepic">
                            <div class=" username">
                                {{ Auth::user()->name }}
                                <span>{{ Auth::user()->getRoleNames()->first() }}</span>
                            </div>
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="relative">
                            <div class="arrow"></div>
                            <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="Profile Picture"
                                style="padding: 12px; transition: 0.2s ease-in-out; height: 120px; width: 200px;" />
                            <x-dropdown-link :href="route('account')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </div>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('HOME') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="Profile Picture"
                    class="profilepic">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('account')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>

    <!-- Desktop Navigation Links -->
    <nav class="bg-white border-b border-gray-100 h-16 flex items-center justify-center border-2 gap-2 ">
        <x-nav-link href="home" active="{{ request()->routeIs('home') }}">Home</x-nav-link>
        <x-nav-link href="messages" active="{{ request()->routeIs('messages') }}">Faculty Interaction</x-nav-link>
        <x-nav-link href="joblisting" active="{{ request()->routeIs('joblisting') }}">Job Listings</x-nav-link>
        <x-nav-link href="networking" active="{{ request()->routeIs('networking') }}">Networking Events</x-nav-link>
        <x-nav-link href="{{ route('discussion') }}" active="{{ request()->routeIs('discussion') }}">Discussion
            Forums</x-nav-link>
        <x-nav-link href="{{ route('page1') }}" active="{{ request()->routeIs('page1') }}">Resources</x-nav-link>
        @if (Auth::user()->hasRole('Admin'))
            <x-nav-link href="user-management" active="{{ request()->routeIs('users') }}">User Management</x-nav-link>
        @endif
    </nav>

    <!-- Mobile Navigation Links -->
    <div :class="{ 'block': open, 'hidden': !open }" class="sm:hidden">
        <div class="flex flex-col items-center space-y-2 py-4 border-t border-gray-300 bg-gray-300">
            <a href="{{ route('page1') }}" class="nav-link block" onclick="changeColor(this); return false;">
                <button class='navlink'>Home</button>
            </a>
            <a href="messages" class="nav-link block" onclick="changeColor(this); return false;">
                <button class='navlink'>Faculty Interaction</button>
            </a>
            <a href="{{ route('page1') }}" class="nav-link block" onclick="changeColor(this); return false;">
                <button class='navlink'>Job Listings</button>
            </a>
            <a href="{{ route('page1') }}" class="nav-link block" onclick="changeColor(this); return false;">
                <button class='navlink'>Networking Events</button>
            </a>
            <a href="{{ route('page1') }}" class="nav-link block" onclick="changeColor(this); return false;">
                <button class='navlink'>Discussion Forums</button>
            </a>
            <a href="{{ route('page1') }}" class="nav-link block" onclick="changeColor(this); return false;">
                <button class='navlink'>Resources</button>
            </a>
        </div>
    </div>
</nav>
