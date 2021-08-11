<x-app-layout>
    <x-auth-card class="">
        <x-auth-validation-errors class="mb-4 w-100" :errors="$errors" />
        <form class="w-100" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="d-flex justify-content-start align-items-center mb-4">
                <h3 class="color-light">Sign In</h3>
            </div>
            <div class="d-flex justify-content-between align-items-center">
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
            <div class="d-flex justify-content-between align-items-center mt-2">
                <div class="input--wrapper">
                    <x-label class="hidden" for="password" :value="__('Password')" />
                    <x-input id="password" class="form-control" type="password" name="password"
                        data-validation-key="password" required autofocus autocomplete="current-password"
                        placeholder="Password" />
                    @error('password')
                        <div class="tool_tip password">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center w-100 mt-2">
                <label for="remember_me" class="d-flex w-100 justify-content-end align-items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 gelatine"
                        name="remember">
                    <p class="mr-2 text-sm m-0 p-0 color-light">&nbsp;{{ __('Remember me') }}</p>
                </label>
            </div>
            <div class="d-flex justify-content-end align-items-center mt-5">
                <p class="color-light">
                    Don't have an account?<br />
                    Create one
                    <a class="registration-link" href="{{ route('register') }}">here</a>.
                </p>
            </div>
            <div class="d-flex align-items-center justify-content-around mt-2 w-100">
                @if (Route::has('password.request'))
                    <a class="registration-link gelatine" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <button class="btn btn-primary gelatine" type="submit" id="login-btn" onclick="event.preventDefault();
                            $('#login-btn').addClass('d-none');
                            $('#loading-spinner').removeClass('d-none');
                            this.closest('form').submit();">
                    {{ __('Log in') }}
                </button>
                <button class="btn btn-primary d-none gelatine" id="loading-spinner" type="button" disabled>
                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                    Loading...
                </button>
            </div>
        </form>
    </x-auth-card>
</x-app-layout>
