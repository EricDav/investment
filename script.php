<script src="<?=$subPath . '/assets/js/jquery-3.3.1.min.js'?>"></script>
    <script src="<?=$subPath . '/assets/js/modernizr-3.6.0.min.js'?>"></script>
    <script src="<?=$subPath . '/assets/js/plugins.js'?>"></script>
    <script src="<?=$subPath . '/assets/js/bootstrap.min.js'?>"></script>
    <script src="<?=$subPath . '/assets/js/magnific-popup.min.js'?>"></script>
    <script src="<?=$subPath . '/assets/js/jquery-ui.min.js'?>"></script>
    <script src="<?=$subPath . '/assets/js/wow.min.js'?>"></script>
    <script src="<?=$subPath . '/assets/js/odometer.min.js'?>"></script>
    <script src="<?=$subPath . '/assets/js/viewport.jquery.js'?>"></script>
    <script src="<?=$subPath . '/assets/js/nice-select.js'?>"></script>
    <script src="<?=$subPath . '/assets/js/owl.min.js'?>"></script>
    <script src="<?=$subPath . '/assets/js/paroller.js'?>"></script>
    <script src="<?=$subPath . '/assets/js/main.js'?>"></script>
    <script>
        $('#signup-from-signin').click(function() {
            $('#loginModal').modal('toggle');
            $('#signupModal').modal('toggle');
        });

        $('#signin-from-signup').click(function() {
            $('#loginModal').modal('toggle');
            $('#signupModal').modal('toggle');
        });

        $('#signin-from-invest').click(function() {
            $('#investModal').modal('toggle');
            $('#loginModal').modal('toggle');
        });

        $('#signup-from-success').click(function() {
            $('#successModal').modal('toggle');
            $('#loginModal').modal('toggle'); 
        });

    </script>
    <script src="<?=$subPath . '/assets/js/modal.js?v=7'?>"></script>
