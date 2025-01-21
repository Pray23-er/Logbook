<header id="header" class="header d-flex align-items-center sticky-top border-0 shadow-bottom">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="/" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">Siweslog</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li>
                    <a href="/" class="{{ request()->is('Sailor/index') ? 'active' : '' }}">Home</a>
                </li>

                <li>
                    <a href="{{ url('/Sailor/help') }}" class="{{ request()->is('Sailor/help') ? 'active' : '' }}">Help</a>
                </li>

                @auth('student')
    <li>
        <form action="{{ route('logout.student') }}" method="POST">
            @csrf
            <button type="submit" class="text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 flex items-center space-x-1">
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                    <path d="M9.707 16.707a1 1 0 01-1.414-1.414L12.636 10.5a1 1 0 011.414 1.414l-3.354 3.354z" clip-rule="evenodd" />
                </svg>
                <span>Logout</span>
            </button>
        </form>
    </li>
@elseif(Auth::guard('school')->check())
    <li>
        <form action="{{ route('logout.school') }}" method="POST">
            @csrf
            <button type="submit" class="text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 flex items-center space-x-1">
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                    <path d="M9.707 16.707a1 1 0 01-1.414-1.414L12.636 10.5a1 1 0 011.414 1.414l-3.354 3.354z" clip-rule="evenodd" />
                </svg>
                <span>Logout</span>
            </button>
        </form>
    </li>
@elseif(Auth::guard('company')->check())
    <li>
        <form action="{{ route('logout.company') }}" method="POST">
            @csrf
            <button type="submit" class="text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 flex items-center space-x-1">
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                    <path d="M9.707 16.707a1 1 0 01-1.414-1.414L12.636 10.5a1 1 0 011.414 1.414l-3.354 3.354z" clip-rule="evenodd" />
                </svg>
                <span>Logout</span>
            </button>
        </form>
    </li>
    @elseif(Auth::guard('admin')->check())
    <li>
        <form action="{{ route('logout.admin') }}" method="GET">
            @csrf
            <button type="submit" class="text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100 flex items-center space-x-1">
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                    <path d="M9.707 16.707a1 1 0 01-1.414-1.414L12.636 10.5a1 1 0 011.414 1.414l-3.354 3.354z" clip-rule="evenodd" />
                </svg>
                <span>Logout</span>
            </button>
        </form>
    </li>
    @else
    <li class="nav-item dropdown d-flex align-items-center">
        <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
        <ul class="dropdown-menu">
            <li><a href="{{ route('school.login') }}">School</a></li>
            <li><a href="{{ route('company.login') }}">Company</a></li>
            <li><a href="{{ route('student_login') }}">Student</a></li>
        </ul>
    </li>
    <li>
        <a href="{{ route("register.store") }}" class="{{ request()->is('register') ? 'active' : '' }}">Register</a>
    </li>
@endauth
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>

{{ $slot }}

