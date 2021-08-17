<div class="menu">

    @if (Auth::user()->id == 1)

    <h2 class="color-light bold">{{ Auth::user()->firstName . ' ' . Auth::user()->lastName }}</h2>

        <ul>

            <li style="{{ Route::currentRouteName() == 'account.dashboard' ? 'background: #434e5c;' : '' }}"><a id="menu-dashboard" class="{{ Route::currentRouteName() == 'account.dashboard' ? 'active' : '' }}" href="{{ route('account.dashboard') }}">Dashboard</a></li>
            <li style="{{ Route::currentRouteName() == 'account.site-metrics' ? 'background: #434e5c;' : '' }}"><a id="menu-sites" class="{{ Route::currentRouteName() == 'account.site-metrics' ? 'active' : '' }}" href="{{ route('account.site-metrics') }}">Site Metrics</a></li>
            <li style="{{ Route::currentRouteName() == 'account.site-users' ? 'background: #434e5c;' : '' }}"><a id="menu-users" class="{{ Route::currentRouteName() == 'account.site-users' ? 'active' : '' }}" href="{{ route('account.site-users') }}">Users</a></li>
            <li style="{{ Route::currentRouteName() == 'account.profile' ? 'background: #434e5c;' : '' }}"><a id="user-profile" class="{{ Route::currentRouteName() == 'account.profile' ? 'active' : '' }}" href="{{ route('account.profile') }}">Profile</a></li>
            <li style="{{ Route::currentRouteName() == 'account.contact-messages' ? 'background: #434e5c;' : '' }}"><a id="user-messages" class="{{ Route::currentRouteName() == 'account.contact-messages' ? 'active' : '' }}" href="{{ route('account.contact-messages') }}">Messages</a></li>
            <li style="{{ Route::currentRouteName() == 'account.settings' ? 'background: #434e5c;' : '' }}"><a id="user-settings" class="{{ Route::currentRouteName() == 'account.settings' ? 'active' : '' }}" href="{{ route('account.settings') }}">Settings</a></li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a id="user-logout" href="route('logout')" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
            </li>

        </ul>

    @else

        <h2 class="color-light">User</h2>

        <ul>

            <li><a id="user-profile" class="{{ Route::currentRouteName() == 'account.profile' ? 'active' : '' }}" href="{{ route('account.profile') }}">Profile</a></li>
            <li><a id="user-messages" class="{{ Route::currentRouteName() == 'account.contact-messages' ? 'active' : '' }}" href="{{ route('account.contact-messages') }}">Messages</a></li>
            <li><a id="user-settings" class="{{ Route::currentRouteName() == 'account.settings' ? 'active' : '' }}" href="{{ route('account.settings') }}">Settings</a></li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a id="user-logout" href="route('logout')" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
            </li>

        </ul>

    @endif

</div>

