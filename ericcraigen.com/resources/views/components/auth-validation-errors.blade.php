@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="errors__message">
            {{ __('Whoops! Something went wrong.') }}
        </div>
    </div>
@endif
