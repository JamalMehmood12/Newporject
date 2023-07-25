<div class="container-fluid" id="header">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <!-- <a class="sidebar-brand brand-logo" href="/"><h2 class="text-light">Dashboard</h2></a> -->
            <!-- <a class="sidebar-brand brand-logo-mini" href="/"><h2>Dashboard</h2></a> -->
        </div>
        <ul class="nav">
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/users')}}">
                    <span class="menu-icon">
                        <i class="mdi mdi-speedometer"></i>
                    </span>
                    <!-- <span class="menu-title">Users</span> -->
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <span class="menu-icon">
                        <i class="mdi mdi-laptop"></i>
                    </span>
                    <span class="menu-title">Food</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item menu-items"><a class="nav-link" href="{{url('/foodmenu')}}"><span class="menu-title">FoodAdd</span></a></li>
                        <li class="nav-item menu-items"><a class="nav-link" href="{{url('/foodmenushow')}}"><span class="menu-title">FoodMenu List</span></a></li>
                        <li class="nav-item menu-items"><a class="nav-link" href="{{url('/aboutfood')}}"><span class="menu-title">About Food</span></a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/viewchefs')}}">
                    <span class="menu-icon">
                        <i class="mdi mdi-chart-bar"></i>
                    </span>
                    <span class="menu-title">Chefs</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('/viewreservation')}}">
                    <span class="menu-icon">
                        <i class="mdi mdi-contacts"></i>
                    </span>
                    <span class="menu-title">Resversation</span>
                </a>
            </li>
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
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
        </ul>
    </nav>
</div>

<style>
    #header {
        background-color: #f5f5f5;
    }

    span.menu-title {
        color: black;
        font-weight: 600;
        /* text-transform: uppercase; */
        font-size: 14px;
        /* line-height: 1.3rem; */
    }
</style>