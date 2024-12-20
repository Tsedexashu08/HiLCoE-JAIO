<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <style>
        *{
            transition: all 0.5ms ease;
        }
        .profilepic {
            border-radius: 50%;
            background-color: blue;
            width: 40px;
            height: 40px;
            border: 2px double black;
            margin-right: 10px;
        }

        .profilepic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        h1 {
            color: #1d167c;
            font-size: 35px;
            font-weight: bolder;
            text-align: center;
            margin-top: auto;
            font-family: 'Jana Thork';
        }

        .nav-link {
            margin-top: 0.2%;
            font-size: 16px;
            font-weight: bold;
            transition: color 0.3s;
            height: 100%;
        }

        .nav-link:hover {
            color: whitesmoke;
            background-color: #836fff;
        }

        .nav-link:active {
            opacity: 0.9;
            scale: 1.1;
            transition: 0.3s ease;
        }

        .hover-border {
            position: relative;
            transition: 0.2s ease;
        }

        .hover-border:hover {
            border: 1px solid grey;
            border-radius: 5px;
            background-color: rgba(245, 245, 245, 0.91)
        }

        button.navlink {
            font-family: 'Times New Roman', serif;
            height: 100%;
            width: 100%;
            width: fit-content;
            text-align: center;
        }

        .username {
            color: black;
            font-size: 18px;
        }
        @media(max-width:640px){
            .profilepic{
                border-radius: 50%;
                height: 150px;
                width: 150px;
            }
        }
    </style>

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
            <div class="hidden sm:flex sm:flex-col sm:items-center sm:ms-6 hover-border">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <img  src="{{ asset('storage/'.Auth::user()->profile_picture) }}" alt="Profile Picture"
                                class="profilepic">
                            <div class=" username">{{ Auth::user()->name }}</div>
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
8
                    <x-slot name="content">
                         <img src="{{ asset('storage/'.Auth::user()->profile_picture) }}" alt="Profile Picture" style="padding : 12px; ;transition : 0.2ms ease in out;height : 150px;width : 200px;"/>
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>

        <!-- Hamburger -->
        <div class="-me-2 flex items-center sm:hidden">
            <button @click="open = ! open"
                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
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
                <img src="{{ asset('storage/'.Auth::user()->profile_picture) }}" alt="Profile Picture"
                    class="profilepic">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
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
    <div
        class="hidden space-x-8 sm:-my-px  sm:flex items-center justify-center text-center h-16 border border-gray-300 w-full">
        <a href="{{ route('page1') }}" class="nav-link block"><button class='navlink'>Home</button></a>
        <a href="messages" class="nav-link block"><button class='navlink'>Faculty Interaction</button></a>
        <a href="{{ route('page1') }}" class="nav-link block"><button class='navlink'>Job Listings</button></a>
        <a href="{{ route('page1') }}" class="nav-link block"><button class='navlink'>Networking Events</button></a>
        <a href="{{ route('page1') }}" class="nav-link block"><button class='navlink'>Discussion Forums</button></a>
        <a href="{{ route('page1') }}" class="nav-link block"><button class='navlink'>Resources</button></a>
    </div>

    <!-- Mobile Navigation Links -->
    <div :class="{ 'block': open, 'hidden': !open }" class="sm:hidden">
        <div class="flex flex-col items-center space-y-2 py-4 border-t border-gray-300 bg-cyan-300">
            <a href="{{ route('page1') }}" class="nav-link block" onclick="changeColor(this); return false;">
                <button class='navlink'>Home</button>
            </a>
            <a href="{{ route('page1') }}" class="nav-link block" onclick="changeColor(this); return false;">
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
