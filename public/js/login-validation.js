$(document).ready(function() {
    $('form').submit(function(event) {
        event.preventDefault();
        var username = $('#nama').val();
        var password = $('#password').val();

        $('.error-message').remove();

        if (username === '') {
            $('#nama').after('<p class="text-red-500 text-xs italic error-message">Please enter your username</p>');
        }

        if (password === '') {
            $('#password').after('<p class="text-red-500 text-xs italic error-message">Please enter your password</p>');
        }

        if ($('.error-message').length === 0) {
            $('form')[0].submit();
        }
    });
});