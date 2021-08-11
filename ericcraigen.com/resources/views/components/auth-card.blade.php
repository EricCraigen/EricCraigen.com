@php
    $currentRoute = Route::currentRouteName();
@endphp
<div class="auth-card">
    <div class="{{ $currentRoute == 'login' ? 'login-form' : 'registration-form' }}">
        {{ $slot }}
    </div>
</div>
