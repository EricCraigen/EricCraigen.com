@php
$currentRoute = Route::currentRouteName();
@endphp
<div class="contact-card">
    <div class="contact-form">
        {{ $slot }}
    </div>
</div>
