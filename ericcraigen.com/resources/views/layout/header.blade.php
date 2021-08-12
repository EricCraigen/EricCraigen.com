@php
$currentRoute = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-lg">

    <div class="navbar--wrapper">
        <a class="navbar-brand gelatine" href="/" id="navbar-brand">
            <img class="nav-brand-logo" src="/img/ericcraigen-com-favico.png" alt="Nav Brand Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbarNav">

        <div class="nav-links-container">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link color-light {{ $currentRoute == 'home-page' ? 'active' : '' }} text-wrap-none"
                        aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-light {{ $currentRoute == 'about-page' ? 'active' : '' }} text-wrap-none"
                        href="/about">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-light {{ $currentRoute == 'projects-landingPad' ? 'active' : '' }} text-wrap-none"
                        href="/projects">My Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-light {{ $currentRoute == 'contact-page' ? 'active' : '' }} text-wrap-none"
                        href="/contact">Contact Me</a>
                </li>
                @if (Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ $currentRoute == 'dashboard' ? 'color-hover' : '' }}" href="#"
                            id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div data-bs-toggle="tooltip" title="Account" data-bs-placement="bottom">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-person-lines-fill svg-color-light" viewBox="0 0 16 16">
                                    <path
                                        d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                                </svg>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item {{ $currentRoute == 'dashboard' ? 'active' : '' }}"
                                    href="{{ route('account.dashboard') }}">Dashboard</a></li>
                            <li><a class="dropdown-item" href="{{ route('account.settings') }}">Settings</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item gelatine">
                        <a class="nav-link" href="{{ route('login') }}" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" title="Login">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-box-arrow-in-right svg-color-light" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                                <path fill-rule="evenodd"
                                    d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item gelatine">
                        <a class="nav-link" href="{{ route('register') }}" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" title="Register">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-person-plus svg-color-light" viewBox="0 0 16 16">
                                <path
                                    d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                <path fill-rule="evenodd"
                                    d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                            </svg>
                        </a>
                    </li>
                @endif

                <li class="nav-item social-links">
                    <a href="https://github.com/EricCraigen" target="blank">
                        <i class="fab fa-github-square color-light"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/eric-craigen-b6b164211/" target="blank">
                        <i class="fab fa-linkedin color-light"></i>
                    </a>
                </li>
            </ul>

        </div>

    </div>

</nav>
