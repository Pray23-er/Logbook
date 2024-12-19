<nav class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="/" class="flex items-center space-x-3">
                        <img src="{{ asset('images/siweslog_logo.png') }}" class="h-10" alt="Siwes Log Logo" />
                        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Siwes Log</span>
                    </a>
                </div>
            </div>
            <div class="hidden md:flex items-center space-x-6">
                <x-navbar-link href="/" :active="request()->is('/')">Home</x-navbar-link>
                <x-navbar-link href="{{ route('help') }}" :active="request()->is('help')">Help</x-navbar-link>

                @auth('student')
                    <form action="{{ route('logout.student') }}" method="POST">
                        @csrf
                        <x-navbar-link href="#" :active="false" onclick="event.preventDefault(); this.closest('form').submit();">Student Logout</x-navbar-link>
                    </form>
                @elseif(Auth::guard('school')->check())
                    <form action="{{ route('logout.school') }}" method="POST">
                        @csrf
                        <x-navbar-link href="#" :active="false" onclick="event.preventDefault(); this.closest('form').submit();">School Logout</x-navbar-link>
                    </form>
                @elseif(Auth::guard('company')->check())
                    <form action="{{ route('logout.company') }}" method="POST">
                        @csrf
                        <x-navbar-link href="#" :active="false" onclick="event.preventDefault(); this.closest('form').submit();">Company Logout</x-navbar-link>
                    </form>
                @else
                    <x-navbar-link href="{{ route('login') }}" :active="request()->is('login')">Login</x-navbar-link>
                    <x-navbar-link href="{{ route('register') }}" :active="request()->is('register')">Register</x-navbar-link>
                @endauth

            </div>
            <div class="-mr-2 flex items-center md:hidden">
                <button @click="mobileMenuOpen = ! mobileMenuOpen" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="md:hidden" id="mobile-menu" x-show="mobileMenuOpen" x-cloak>
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <x-navbar-link href="/" :active="request()->is('/')">Home</x-navbar-link>
            <x-navbar-link href="{{ route('help') }}" :active="request()->is('help')">Help</x-navbar-link>
            @auth('student')
                <form action="{{ route('logout.student') }}" method="POST">
                    @csrf
                    <x-navbar-link href="#" :active="false" onclick="event.preventDefault(); this.closest('form').submit();">Student Logout</x-navbar-link>
                </form>
            @elseif(Auth::guard('school')->check())
                <form action="{{ route('logout.school') }}" method="POST">
                    @csrf
                    <x-navbar-link href="#" :active="false" onclick="event.preventDefault(); this.closest('form').submit();">School Logout</x-navbar-link>
                </form>
            @elseif(Auth::guard('company')->check())
                <form action="{{ route('logout.company') }}" method="POST">
                    @csrf
                    <x-navbar-link href="#" :active="false" onclick="event.preventDefault(); this.closest('form').submit();">Company Logout</x-navbar-link>
                </form>
            @else
                <x-navbar-link href="{{ route('login') }}" :active="request()->is('login')">Login</x-navbar-link>
                <x-navbar-link href="{{ route('register') }}" :active="request()->is('register')">Register</x-navbar-link>
            @endauth
        </div>
    </div>
</nav>

<script>
    function dropdown() {
        return {
            mobileMenuOpen: false,
        }
    }
</script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
