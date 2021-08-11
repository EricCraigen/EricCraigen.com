<x-app-layout>
    <x-forgot-password-card class="w-100">

        <x-auth-validation-errors class="mb-4 w-100 was-validated" :errors="$errors" />

        <div class="d-flex justify-content-start align-items-center mb-4 w-100">
            <h4 class="color-light">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </h4>
        </div>

        <form class="w-100" method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="d-flex flex-column align-items-end justify-content-between mt-4">

                <div class="input--wrapper w-75 mb-3">
                    <x-label class="hidden" for="email" :value="__('Email')" />
                    <x-input id="email" class="form-control" type="email" name="email" :value="old('email')"
                        data-validation-key="email" required autofocus autocomplete="email"
                        placeholder="Email Address" />
                    @error('email')
                        <div class="tool_tip email">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex align-items-center justify-content-end">

                    <button class="btn btn-primary gelatine" type="submit" id="login-btn" onclick="event.preventDefault();
                                $('#login-btn').addClass('d-none');
                                $('#loading-spinner').removeClass('d-none');
                                this.closest('form').submit();">
                        {{ __('Email Password Reset Link') }}
                    </button>
                    <button class="btn btn-primary d-none gelatine" id="loading-spinner" type="button" disabled>
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>
                </div>

            </div>

        </form>

    </x-forgot-password-card>
</x-app-layout>
