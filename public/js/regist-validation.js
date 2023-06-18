$(document).ready(function() {
    $('form').submit(function(event) {
        event.preventDefault();
        var email = $('#email').val();
        var username = $('#nama').val();
        var gender = $('#jenisKelamin').val();
        var phone = $('#nomorTelepon').val();
        var password = $('#password').val();
        var confirmPassword = $('#confirm-password').val();

        $('.error-message').remove();

        if (email === '') {
            $('#email').after('<p class="text-red-500 text-xs italic error-message">Please enter your email</p>');
        }

        if (username === '') {
            $('#nama').after('<p class="text-red-500 text-xs italic error-message">Please enter your username</p>');
        }

        if (gender === '') {
            $('#jenisKelamin').after('<p class="text-red-500 text-xs italic error-message">Please select your gender</p>');
        }

        if (phone === '') {
            $('#nomorTelepon').after('<p class="text-red-500 text-xs italic error-message">Please enter your phone number</p>');
        }

        if (password === '') {
            $('#password').after('<p class="text-red-500 text-xs italic error-message">Please enter your password</p>');
        }

        if (confirmPassword === '') {
            $('#confirm-password').after('<p class="text-red-500 text-xs italic error-message">Please confirm your password</p>');
        }

        if (password !== confirmPassword) {
            $('#confirm-password').after('<p class="text-red-500 text-xs italic error-message">Passwords do not match</p>');
        }

        if ($('.error-message').length === 0) {
            $('form')[0].submit();
        }
    });
});