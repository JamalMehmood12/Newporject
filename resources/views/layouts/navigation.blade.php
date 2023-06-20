<nav class="navbar navbar-expand-lg navbar-light bg-white dark:bg-gray-800 border-bottom border-gray-100 dark:border-gray-700">
    <div class="container">
        <!-- Primary Navigation Menu -->
        <div class="justify-content-between align-items-center mx-auto">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a class="navbar-brand" href="{{ route('dashboard') }}">
                        <!-- <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" /> -->
                    </a>
                </div>
                <!-- Responsive Navigation Menu -->
                <!-- <div class="collapse navbar-collapse" id="responsiveNav">
                    <ul class="navbar-nav mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                        </li>
                    </ul> -->

                    <!-- Responsive Settings Options -->
                    <ul class="navbar-nav mt-2 mt-lg-0">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="responsiveSettingsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="responsiveSettingsDropdown">
                                <li><a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Profile') }}</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">{{ __('Log Out') }}</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endauth

                    </ul>
                </div>
            </div>
</nav>