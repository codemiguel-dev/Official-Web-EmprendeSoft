<nav>
    <!--Start topbar header-->
    <header class="topbar-nav">
        <nav class="navbar navbar-expand fixed-top">
            <ul class="navbar-nav mr-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link toggle-menu" href="javascript:void();">
                        <i class="icon-menu menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <form class="search-bar">
                        <input type="text" class="form-control" placeholder="Enter keywords">
                        <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                    </form>
                </li>
            </ul>

            <ul class="navbar-nav align-items-center right-nav-link">
                <!--
                  <li class="nav-item dropdown-lg">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                        href="javascript:void();">
                        <i class="fa fa-envelope-open-o"></i></a>
                </li>
                <li class="nav-item dropdown-lg">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                        href="javascript:void();">
                        <i class="fa fa-bell-o"></i></a>
                </li>
                <li class="nav-item language">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                        href="javascript:void();"><i class="fa fa-flag"></i></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
                        <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
                        <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
                        <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
                    </ul>
                </li>
                -->
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                        <span class="user-profile">
                            @if (auth()->user()->profile_photo_path)
                                <img class="align-self-start mr-3" src="{{ asset(auth()->user()->profile_photo_path)}}" alt="user avatar">
                            @else
                                <img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar">
                            @endif
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item user-details">
                            <a href="javaScript:void();">
                                <div class="media">
                                    <div class="avatar">
                                        @if (auth()->user()->profile_photo_path)
                                            <img class="align-self-start mr-3" src="{{ asset(auth()->user()->profile_photo_path)}}"
                                                alt="user avatar">
                                        @else
                                            <img class="align-self-start mr-3" src="https://via.placeholder.com/110x110"
                                                alt="user avatar">
                                        @endif
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-2 user-title">{{ auth()->user()->name }}</h6>
                                        <p class="user-subtitle">{{ auth()->user()->email }}</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!--
                             <li class="dropdown-divider"></li>
                        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
                        <li class="dropdown-divider"></li>
                        -->

                        <li class="dropdown-item">

                            <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                                {{ __('Profile') }}
                            </x-responsive-nav-link>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-item">

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data
                                @submit.prevent="$root.submit();">
                                @csrf

                                <!-- Authentication -->
                                <button type="submit" class="w-full text-start">
                                    <x-responsive-nav-link>
                                        <i class="icon-power mr-2"></i>
                                        {{ __('Salir') }}
                                    </x-responsive-nav-link>
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <!--End topbar header-->
</nav>
