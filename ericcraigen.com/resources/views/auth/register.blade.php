<x-app-layout>
    <x-auth-card>
        <x-auth-validation-errors class="mb-4 w-100 was-validated" :errors="$errors" />
        <form class="w-100" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="d-flex justify-content-start align-items-center mb-4 w-100">
                <h2 class="color-light">Account Registration</h2>
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
                    <x-label class="hidden" for="password" :value="__('Password')" />
                    <x-input id="password" class="form-control registration-input" type="password" name="password"
                        data-validation-key="password" required autofocus placeholder="Password"
                        autocomplete="new-password" />
                    @error('password')
                        <div class="tool_tip password">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input--wrapper">
                    <x-label class="hidden" for="password_confirmation" :value="__('Confirm Password')" />
                    <x-input id="password_confirmation" class="form-control" type="password"
                        name="password_confirmation" data-validation-key="password_confirmation" required autofocus
                        placeholder="Confirm Password" />
                    @error('password_confirmation')
                        <div class="tool_tip password_confirmation">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between  mt-4">
                <a class="registration-link gelatine" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <button class="btn btn-primary gelatine" type="submit" id="login-btn" onclick="event.preventDefault();
                            $('#login-btn').addClass('d-none');
                            $('#loading-spinner').removeClass('d-none');
                            this.closest('form').submit();">
                    {{ __('Register') }}
                </button>
                <button class="btn btn-primary d-none gelatine" id="loading-spinner" type="button" disabled>
                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                    Loading...
                </button>
            </div>
        </form>
    </x-auth-card>
</x-app-layout>
