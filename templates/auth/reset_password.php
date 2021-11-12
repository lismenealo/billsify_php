<?php
require_once "../modules/Auth/reset_password.php";
?>

<!-- Main -->
<section id="main">
    <div class="container">
        <header>
            <h2>Reset Password</h2>
        </header>

        <div class="row aln-center">
            <div class="wrapper">
                <p>Please fill out this form to reset your password.</p>
                <form action="reset_password" method="post">
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                        <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                        <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a class="btn btn-link ml-2" href="home">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
