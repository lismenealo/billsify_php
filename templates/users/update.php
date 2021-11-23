<?php
require_once "../modules/Users/update.php";
?>

<!-- Main -->
<section id="main">
    <div class="container">
        <header>
            <h2>Update User</h2>
        </header>
        <div class="row aln-center">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="mt-5">Update Record</h2>
                            <p>Please edit the input values and submit to update the employee record.</p>
                            <form action="users_update?id=<?php echo trim($_GET["id"])?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                                    <span class="invalid-feedback"><?php echo $username_err;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                                    <span class="invalid-feedback"><?php echo $password_err;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                                    <span class="invalid-feedback"><?php echo $name_err;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                                    <span class="invalid-feedback"><?php echo $email_err;?></span>
                                </div>
                                <div class="form-group">
                                    <label>role</label>
                                    <input type="text" name="role" class="form-control <?php echo (!empty($role_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $role; ?>">
                                    <span class="invalid-feedback"><?php echo $role_err;?></span>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Submit">
                                    <a class="btn btn-link ml-2" href="users">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>