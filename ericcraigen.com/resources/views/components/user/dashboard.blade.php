@php
$currentRoute = Route::currentRouteName();
@endphp

<x-app-layout>

    <div class="dashboard-wrapper">

        <div class="menu">
            <h2>Admin</h2>
            <ul>
                <li><a id="menu-dashboard" class="active" href="">Dashboard</a></li>
                <li><a id="menu-sites" href="">Sites</a></li>
                <li><a id="menu-users" href="">Users</a></li>
                <li><a id="menu-settings" href="">Settings</a></li>
            </ul>
            <h2>User</h2>
            <ul>
                <li><a id="user-profile" href="">Profile</a></li>
                <li><a id="user-messages" href="">Messages</a></li>
                <li><a id="user-settings" href="">Settings</a></li>
                <li><a id="user-logout" href="">Log&nbsp;Out</a></li>
            </ul>
        </div>

        <div class="wrapper">
            <h1>Welcome to thirtythree.co.uk</h1>

            <ul aria-label="Vehicle Models Available:">
                <li><a href="">one</a></li>
                <li><a href="">two</a></li>
                <li><a href="">three</a></li>
            </ul>

        </div>

    </div>



</x-app-layout>

<script type="text/javascript">


</script>
