
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login Into Your Account</h5>
                <button style="width: fit-content;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div id="login-error-message" style="width: 100%;text-align: center;color: red;font-size: 13px;"></div>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" id="login-email" placeholder="email" name="name">
                    <span class="error-message" id="email-error"></span>
                </div>
                <div class="form-group">
                    <label for="name">Password</label>
                    <input type="password" id="login-password" placeholder="password" name="name">
                    <span class="error-message" id="password-error"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button id="login-account" type="button" class="btn btn-primary">Login</button>
                <div style="
                    width: 100%;
                    text-align: center;
                            ">Don't have an account?<a id="signup-from-signin" style="
                    margin-left: 10px;
                    font-size: 17px;
                    cursor: pointer;
                    font-style: oblique;
                    color: #007bff;
                ">Sign up</a></div>
            </div>
            </div>
        </div>
        </div>