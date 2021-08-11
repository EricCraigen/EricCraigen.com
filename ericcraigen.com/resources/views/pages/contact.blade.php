@php
$currentRoute = Route::currentRouteName();
@endphp

<x-app-layout>
    <x-contact-card class="w-100">
        <form class="w-100" method="post" action="{{ route('contact.store') }}">
            @csrf
            <div class="d-flex justify-content-start align-items-center mb-4 w-100">
                <h2 class="color-light">Contact Me</h2>
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <div class="input--wrapper">
                    <x-label class="hidden" for="firstName" :value="__('First Name')" />
                    <x-input id="firstName" class="form-control registration-input" type="text" name="firstName"
                        :value="old('firstName')" data-validation-key="firstName" required autofocus
                        autocomplete="given-name" placeholder="First Name" />
                    @error('firstName')
                        <div class="tool_tip firstName">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input--wrapper">
                    <x-label class="hidden" for="lastName" :value="__('Last Name')" />
                    <x-input id="lastName" class="form-control" type="text" name="lastName" :value="old('lastName')"
                        data-validation-key="lastName" required autofocus autocomplete="family-name"
                        placeholder="Last Name" />
                    @error('lastName')
                        <div class="tool_tip lastName">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-between mt-4">
                <div class="input--wrapper">
                    <x-label class="hidden" for="email" :value="__('Email')" />
                    <x-input id="email" class="form-control" type="email" name="email" :value="old('email')"
                        data-validation-key="email" required autofocus autocomplete="email"
                        placeholder="Email Address" />
                    @error('email')
                        <div class="tool_tip email">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-between mt-4">
                <div class="input--wrapper">
                    <x-label class="hidden" for="phone" :value="__('Phone Number')" />
                    <x-input id="phone" class="form-control registration-input" type="text" name="phone"
                        :value="old('phone')" data-validation-key="phone" required autofocus placeholder="Phone Number"
                        autocomplete="new-phone" />
                    @error('phone')
                        <div class="tool_tip phone">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input--wrapper">
                    <x-label class="hidden" for="subject" :value="__('Subject')" />
                    <x-input id="subject" class="form-control" type="text" name="subject" :value="old('subject')"
                        data-validation-key="subject" required autofocus placeholder="Subject" />
                    @error('subject')
                        <div class="tool_tip subject">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-between mt-4">
                <div class="input--wrapper">
                    <x-label class="hidden" for="message" :value="__('Message')" />
                    <textarea class="form-control" name="message" id="message" rows="4"
                        placeholder="Message"></textarea>
                    @error('message')
                        <div class="tool_tip message">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-end  mt-4">

                <button class="btn btn-primary gelatine" type="submit" id="login-btn" onclick="event.preventDefault();
                            $('#login-btn').addClass('d-none');
                            $('#loading-spinner').removeClass('d-none');
                            this.closest('form').submit();">
                    {{ __('Send') }}
                </button>
                <button class="btn btn-primary d-none gelatine" id="loading-spinner" type="button" disabled>
                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                    Loading...
                </button>
            </div>

        </form>
    </x-contact-card>
</x-app-layout>
