<!-- MODALS -->
<!-- Login form -->
<div class="modal" id="modal-login">
    <div class="modal-content">
        <span class="close-modal">&#x2716;</span>
        <div class="form-wrapper">
            <h3>Login</h3>
            <hr>
            <form action="authentication.php" method="post">

                <div class="input-container">
                    <label for="email">Email</label>
                    <input class="text-input" type="email" name="email" id="email" required>
                </div>

                <div class="input-container">
                    <label for="password">Password</label>
                    <input class="text-input" type="password" name="password" id="password" required>
                </div>
                <input type="submit" name="login-submit" value="Sign in">

                <p>Not a member? <a class="modal-btn" id="login" data-modal="modal-signup" href="#">Sign
                        up.</a></p>
            </form>
        </div>
    </div>
</div>

<!-- Sign up form -->
<div class="modal" id="modal-signup">
    <div class="modal-content">
        <span class="close-modal">&#x2716;</span>
        <div class="form-wrapper">
            <h3>Signup</h3>
            <hr>
            <form action="register.php" method="post">
                <div class="same-line-input">
                    <div class="input-container">
                        <label for="fName">First Name *</label>
                        <input class="text-input" type="text" name="fName" id="fName" required>
                    </div>

                    <div class="input-container">
                        <label for="lName">Last Name</label>
                        <input class="text-input" type="text" name="lName" id="lName">
                    </div>
                </div>

                <div class="input-container">
                    <label for="signup-email">Email *</label>
                    <input class="text-input" type="email" name="signup-email" id="signup-email" required>
                </div>

                <div class="input-container">
                    <label for="password">Password *</label>
                    <input class="text-input" type="password" name="password" required>
                </div>

                <div class="input-container">
                    <label for="passwordConfirm">Confirm Password *</label>
                    <input class="text-input" type="password" name="passwordConfirm" required>
                </div>

                <input type="submit" name="signup-submit" value="Sign up">
                <p>Already a member? <a class="modal-btn" id="signup" data-modal="modal-login" href="#">Sign in.</a></p>
            </form>
        </div>
    </div>
</div>
<!-- END MODALS -->