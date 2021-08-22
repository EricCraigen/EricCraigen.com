@php
$currentRoute = Route::currentRouteName();
@endphp

<x-app-layout>

    <div class="dashboard-sidebar" id="messages-group">

        <x-dashboard-menu />

        <x-messages.messages-menu />

        <x-messages.messages-lists inbox="{!! $inbox !!}"
                          starred="{!! $starred !!}"
                          snoozed="{!! $snoozed !!}"
                          trashed="{!! $trashed !!}"
                          />

    </div>

    <x-messages.selected-message />

    {{-- <div class="selected-message" id="selected-message">
        content goes here
    </div> --}}

</x-app-layout>


<script type="text/javascript" src="/js/messages/messages.js">
</script>
