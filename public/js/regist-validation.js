$(document).ready(function() {
    $('form').submit(function(event) {
        event.preventDefault();
        var email = $('#email').val();
        var username = $('#username').val();
        var gender = $('#gender').val();
        var phone = $('#phone').val();
        var password = $('#password').val();
        var confirmPassword = $('#confirm-password').val();

        // Reset error messages
        $('.error-message').remove();

        // Validate email
        if (email === '') {
            $('#email').after('<p class="text-red-500 text-xs italic error-message">Please enter your email</p>');
        }

        // Validate username
        if (username === '') {
            $('#username').after('<p class="text-red-500 text-xs italic error-message">Please enter your username</p>');
        }

        // Validate gender
        if (gender === '') {
            $('#gender').after('<p class="text-red-500 text-xs italic error-message">Please select your gender</p>');
        }

        // Validate phone number
        if (phone === '') {
            $('#phone').after('<p class="text-red-500 text-xs italic error-message">Please enter your phone number</p>');
        }

        // Validate password
        if (password === '') {
            $('#password').after('<p class="text-red-500 text-xs italic error-message">Please enter your password</p>');
        }

        // Validate confirm password
        if (confirmPassword === '') {
            $('#confirm-password').after('<p class="text-red-500 text-xs italic error-message">Please confirm your password</p>');
        }

        // Validate password match
        if (password !== confirmPassword) {
            $('#confirm-password').after('<p class="text-red-500 text-xs italic error-message">Passwords do not match</p>');
        }

        // Submit the form if there are no errors
        if ($('.error-message').length === 0) {
            $('form')[0].submit();
        }
    });
});