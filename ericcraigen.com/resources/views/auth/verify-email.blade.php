<x-app-layout>
    <x-verify-email-card class="w-100">

        <x-auth-validation-errors class="mb-4 w-100 was-validated" :errors="$errors" />

        <div class="d-flex justify-content-start align-items-center mb-4 w-100">
            <h2 class="color-light">Email Verification</h2>
        </div>
        <div class="d-flex justify-content-start align-items-center mb-4 w-100">
            <p class="color-light">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link I just emailed to you? If you didn\'t receive the email, I will gladly send you another.') }}
            </p>
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="d-flex justify-content-start align-items-center mb-4 w-100">
                <p class="color-light">
                    {{ __('I have sent a new verification link to the email address you provided during registration.') }}
                </p>
            </div>
        @endif

        <div class="d-flex justify-content-end align-items-center mb-4 w-100">
            <div class="resend-verification-button">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button class="btn btn-primary gelatine" type="submit" id="login-btn1" onclick="event.preventDefault();
                            $('#login-btn1').addClass('d-none');
                            $('#loading-spinner1').removeClass('d-none');
                            this.closest('form').submit();">
                        {{ __('Resend Verification Email') }}
                    </button>
                    <button class="btn btn-primary d-none gelatine" id="loading-spinner1" type="button" disabled>
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>
                </form>
            </div>
            <div class="">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn-primary gelatine" type="submit" id="login-btn2" onclick="event.preventDefault();
                                $('#login-btn2').addClass('d-none');
                                $('#loading-spinner2').removeClass('d-none');
                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </button>
                    <button class="btn btn-primary d-none gelatine" id="loading-spinner2" type="button" disabled>
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>
                </form>
            </div>
        </div>

    </x-verify-email-card>
</x-app-layout>
