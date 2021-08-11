<x-app-layout>
    <x-reset-password-card>

        <x-auth-validation-errors class="mb-4 w-100 was-validated" :errors="$errors" />

        <div class="d-flex justify-content-start align-items-center mb-4 w-100">
            <h2 class="color-light">
                Password Reset
            </h2>
        </div>

        <div class="d-flex justify-content-start align-items-center mb-4 w-100">
            <p class="color-light">
                You can now reset your account password, provided your reset token has not expired. No worries it that is that case though.
                Simply request a new one!
            </p>
        </div>

        <form class="w-100" method="POST" action="{{ route('password.update') }}">
            @csrf

            <div class="d-flex flex-column align-items-end justify-content-between">

                <div class="input--wrapper w-75">
                    <x-label class="hidden" for="email" :value="__('Email')" />
                    <x-input id="email" 
                            class="form-control" 
                            type="email" 
                            name="email" 
                            :value="old('email')" 
                            data-validation-key="email"
                            required 
                            autofocus
                            autocomplete="email"
                            placeholder="Email Address" />
                    @error('email')
                        <div class="tool_tip email">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex align-items-center justify-content-between mt-4 mb-4">
                    <div class="input--wrapper">
                        <x-label class="hidden" for="password" :value="__('Password')" />
                        <x-input id="password" class="form-control registration-input"
                                        type="password"
                                        name="password"
                                        data-validation-key="password"
                                        required 
                                        autofocus
                                        placeholder="Password"
                                        autocomplete="new-password" />
                        @error('password')
                            <div class="tool_tip password">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input--wrapper">
                        <x-label class="hidden" for="password_confirmation" :value="__('Confirm Password')" />
                        <x-input id="password_confirmation" class="form-control"
                                        type="password"
                                        name="password_confirmation" 
                                        data-validation-key="password_confirmation"
                                        required
                                        autofocus
                                        placeholder="Confirm Password" />
                        @error('password_confirmation')
                            <div class="tool_tip password_confirmation">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-around mt-2 w-100">

                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    @if (Route::has('password.request'))
                        <a class="registration-link" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif 
                    <button class="btn btn-primary gelatine" 
                            type="submit" id="login-btn" 
                            onclick="event.preventDefault();
                                $('#login-btn').addClass('d-none');
                                $('#loading-spinner').removeClass('d-none');
                                this.closest('form').submit();">
                        {{ __('Reset Password') }}
                    </button>
                    <button class="btn btn-primary d-none gelatine" id="loading-spinner" type="button" disabled>
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>

                </div>

            </div>

        </form>

    </x-reset-password-card>
</x-app-layout>
