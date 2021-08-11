@php
    $currentRoute = Route::currentRouteName();
@endphp
<div class="verify-email-card">
    <div class="verify-email-form">
        {{ $slot }}
    </div>
</div>