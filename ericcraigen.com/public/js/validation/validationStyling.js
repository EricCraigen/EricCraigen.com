$('.form-control').on('input', function() {
    let validationKey = $(this).data('validation-key');
    let inputLength = $(this).val().length;
    switch (validationKey) {
        case ('firstName'):
                if (inputLength == 0) {
                    $(this).addClass('is-invalid');
                    $('.firstName').removeClass('d-none');
                    $('.firstName').addClass('d-block');
                    $('.firstName').html('Please enter your First Name.');
                } else if (inputLength <= 1) {
                    $(this).addClass('is-invalid');
                    $('.firstName').removeClass('d-none');
                    $('.firstName').addClass('d-block');
                    $('.firstName').html('First Name must be at least 2 characters.');
                } 
                else {
                    $(this).removeClass('is-invalid');
                    $(this).addClass('is-valid');
                    $('.firstName').addClass('d-none');
                }
            break;

        case ('lastName'):
            if (inputLength == 0) {
                $(this).addClass('is-invalid');
                $('.lastName').removeClass('d-none');
                $('.lastName').addClass('d-block');
                $('.lastName').html('Please enter your First Name.');
            } else if (inputLength <= 1) {
                $(this).addClass('is-invalid');
                $('.lastName').removeClass('d-none');
                $('.lastName').addClass('d-block');
                $('.lastName').html('Last Name must be at least 2 characters.');
            } 
            else {
                $(this).removeClass('is-invalid');
                $(this).addClass('is-valid');
                $('.lastName').addClass('d-none');
            }
            break;

        case ('email'):
            let validEmailAddress = this.value.match(/^\S+@\S+\.\S+$/);
            if (validEmailAddress == null) {
                $(this).addClass('is-invalid');
                $('.email').removeClass('d-none');
                $('.email').addClass('d-block');
                if (inputLength == 0) {
                    $('.email').html('Please enter your Email Address.');
                } else {
                    $('.email').html('Please enter a valid Email Address.');
                }
            } else {
                $(this).removeClass('is-invalid');
                $(this).addClass('is-valid');
                $('.email').addClass('d-none');
            }
            break;

        case ('password'):
            let hasDigit = this.value.match(/\d/);
            let hasLowerCase = this.value.match(/[a-z]/);
            let hasUpperCase = this.value.match(/[A-Z]/);
            let validPassword = this.value.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/);
            if (validPassword == null) {
                $(this).addClass('is-invalid');
                $('.password').removeClass('d-none');
                $('.password').addClass('d-block');
                if (inputLength == 0) {
                    $('.password').html('Please enter a Password.');
                } else if (inputLength < 8) {
                    if (hasDigit == null) {
                        $('.password').html('Password must contain at least 1 number.');
                    } else if (hasLowerCase == null) {
                        $('.password').html('Password must contain at least 1 lower case character.');
                    } else if (hasUpperCase == null) {
                        $('.password').html('Password must contain at least 1 upper case character.');
                    } else {
                        $('.password').html('Password must contain at least 8 characters.');
                    }
                } else {
                    if (hasDigit == null) {
                        $('.password').html('Password must contain at least 1 number.');
                    } else if (hasLowerCase == null) {
                        $('.password').html('Password must contain at least 1 lower case character.');
                    } else if (hasUpperCase == null) {
                        $('.password').html('Password must contain at least 1 upper case character.');
                    } else {
                        $('.password').html('Please enter a valid Password.');
                    }
                }
            } else {
                $(this).removeClass('is-invalid');
                $(this).addClass('is-valid');
                $('.password').addClass('d-none');
            }
            break;
                
        case ('password_confirmation'):
            if ($(this).val() != $('#password').val()) {
                $(this).addClass('is-invalid');
                $('.password_confirmation').removeClass('d-none');
                $('.password_confirmation').addClass('d-block');
                if (inputLength == 0) {
                    $('.password_confirmation').html('Please enter a Password.');
                } else {
                    $('.password_confirmation').html('Passwords do not match.');
                }
            } else {
                $(this).removeClass('is-invalid');
                $(this).addClass('is-valid');
                $('.password_confirmation').addClass('d-none');
            }
            break;

        case ('phone'):
            let validPhoneNumber = this.value.match(/^(?:(?:\(\d{3}\)|\d{3})-\d{3}-(?:\d{2}-\d{2}|\d{4})|\d{10})$/);
            // alert(validPhoneNumber);
            if (validPhoneNumber == null) {
                $(this).addClass('is-invalid');
                $('.password').removeClass('d-none');
                $('.password').addClass('d-block');
                $('.phone').html('Please enter a valid Phone Number.');
            } else {
                $(this).removeClass('is-invalid');
                $(this).addClass('is-valid');
                $('.phone').addClass('d-none');
            }
            break;

        case ('subject'):
            if (inputLength == 0) {
                $(this).addClass('is-invalid');
                $('.subject').removeClass('d-none');
                $('.subject').addClass('d-block');
                $('.subject').html('Please enter a Subject.');
            } else if (inputLength <= 1) {
                $(this).addClass('is-invalid');
                $('.subject').removeClass('d-none');
                $('.subject').addClass('d-block');
                $('.subject').html('Subject must be at least 2 characters.');
            } 
            else {
                $(this).removeClass('is-invalid');
                $(this).addClass('is-valid');
                $('.subject').addClass('d-none');
            }
            break;

        case ('message'):
            if (inputLength == 0) {
                $(this).addClass('is-invalid');
                $('.message').removeClass('d-none');
                $('.message').addClass('d-block');
                $('.message').html('Please enter a Message.');
            } else if (inputLength <= 1) {
                $(this).addClass('is-invalid');
                $('.message').removeClass('d-none');
                $('.message').addClass('d-block');
                $('.message').html('Message must be at least 2 characters.');
            } 
            else {
                $(this).removeClass('is-invalid');
                $(this).addClass('is-valid');
                $('.message').addClass('d-none');
            }
            break;
    
        default:
            break;
    }
});
