var firstName = $('#firstName');
var lastName = $('#lastName');
var email = $('#email');
var password = $('#password');

$('#create-account').click(function() {
    if (!firstName.trim()) {
        $('#firstname-error').show();
        $('#firstname-error').text('First name is required')
    } else if (!lastName.trim()) {
        $('#lastname-error').show();
        $('#lastname-error').text('Last name is required')
    } else if (!email.trim()) {
        $('#firstname-error').show();
        $('#email-error').text('Email is required')
    } else if (!password.trim()) {
        $('#password-error').show();
        $('#password-error').text('Password is required')
    } else {
        
    }
});