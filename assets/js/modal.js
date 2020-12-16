var firstName = $('#firstName');
var lastName = $('#lastName');
var email = $('#email');
var password = $('#password');
var isError = false;
var id = null;

$('#create-account').click(function() {
    isError = false;
    clear();
    if (!firstName.val().trim()) {
        $('#firstname-error').text('First name is required');
        isError = true;
    }
     if (!lastName.val().trim()) {
        $('#lastname-error').text('Last name is required');
        isError = true;
    } 
    if (!email.val().trim()) {
        $('#email-error').text('Email is required');
        isError = true;
    } 
     if (!password.val().trim()) {
        $('#password-error').text('Password is required');
        isError = true;
    }

    if (!isError) {
        $('#create-account').css('disabled', true);
        $('#create-account').text('Registering..');
        $.ajax('/signup', { data: {'email': email.val(), 'password' :password.val(), 'firstName': firstName.val(), 'lastName': lastName.val()},
        type: 'POST',  success: function(result) {
            $('#create-account').css('disabled', false);
            $('#create-account').text('Register');
           response = result;
          if (!response.success) {
               const messages = response.message
               if (messages.hasOwnProperty('email')) {
                    $('#email-error').text(messages.email);
               }

               if (messages.hasOwnProperty('firstName')) {
                    $('#firstname-error').text(messages.firstName);
                }

                if (messages.hasOwnProperty('lastName')) {
                    $('#lastname-error').text(messages.lastName);
                }

                if (messages.hasOwnProperty('password')) {
                    $('#password-error').text(messages.password);
                }

               //$('#error-message').text(response.message);
          } else {
              $("#verificationModal").modal('toggle');
              $("#signupModal").modal('toggle');
              id = response.userId;
              // window.location = '/';
          }
       }});
    }
});

$('#login-account').click(function() {
    var email = $('#login-email');
    var password = $('#login-password');

    if (!email.val().trim()) {
        $('#login-error-message').text('Email is required');
    } else if (!password.val().trim()) {
        $('#login-error-message').text('Password is required');
    } else {
        $('#login-account').css('disabled', true);
        $('#login-account').text('Logging In...');
        $.ajax('/login', { data: {'email': email.val(), 'password' :password.val()},
        type: 'POST',  success: function(result) {
            $('#login-account').css('disabled', false);
            $('#login-account').text('Login');
           response = result;
          if (!response.success) {
            $('#login-error-message').text(response.message)
          } else {
             window.location = 'http://dashboard.wiseinvestment.com.ng/?code='+ response.code + '&_id=' + response.id;
          }
       }});
    }
});

$('#verify-account').click(function() {
    var code = $('#verification-input');
    if (!code.val().trim()) {
        $('#verification-error-message').text('Verification code is required');
    }  else {
        $.ajax('/verify-account', { data: {id: id, code :code},
        type: 'POST',  success: function(result) {
               if (result.success) {
                $('#successModal').modal('toggle');
                $('#loginModal').modal('toggle'); 
               }
        }});
    }
});
function clear() {
    $('#firstname-error').text('');
    $('#lastname-error').text('');
    $('#email-error').text('');
    $('#password-error').text('');
}
