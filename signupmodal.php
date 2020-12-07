<style>
            .error-message {
                font-size: 13px;
                color: red;
            }
        </style>
        <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Open An Account</h5>
                <button style="width: fit-content;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="name">First name</label>
                    <input type="text" id="firstName" placeholder="name" name="name">
                    <span class="error-message" id="firstname-error"></span>
                </div>
                <div class="form-group">
                    <label for="name">Last name</label>
                    <input type="text" id="lastName" placeholder="name" name="name">
                    <span class="error-message" id="lastname-error"></span>
                </div>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" id="email" placeholder="email" name="name">
                    <span class="error-message" id="email-error"></span>
                </div>
                <div class="form-group">
                    <label for="name">Password</label>
                    <input type="password" id="password" placeholder="password" name="name">
                    <span class="error-message" id="password-error"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button id="create-account" type="button" class="btn btn-primary">Register</button>
                <div style="
                    width: 100%;
                    text-align: center;
                            ">Already have an account?<a id="signin-from-signup" style="
                    margin-left: 10px;
                    font-size: 17px;
                    cursor: pointer;
                    font-style: oblique;
                    color: #007bff;
                ">Sign in</a></div>
            </div>
            </div>
        </div>
        </div>