<?php
require_once "../modules/Appointments/update.php";
?>

<!-- Main -->
<section id="main">
    <div class="container">
        <header>
            <h2>Update Appointment</h2>
        </header>

        <div class="row aln-center">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="mt-5">Update Record</h2>
                            <p>Please edit the input values and submit to update the employee record.</p>
                            <form action="update?id=<?php echo trim($_GET["id"])?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>User</label>
                                    <input type="text" name="user" class="form-control <?php echo (!empty($user_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $user; ?>">
                                    <span class="invalid-feedback"><?php echo $user_err;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Comments</label>
                                    <textarea name="comments" class="form-control <?php echo (!empty($comments_err)) ? 'is-invalid' : ''; ?>" id="pclu-textarea"><?php echo $comments; ?></textarea>
                                    <span class="invalid-feedback"><?php echo $comments_err;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" name="date" class="form-control <?php echo (!empty($date_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $date; ?>">
                                    <span class="invalid-feedback"><?php echo $date_err;?></span>
                                </div>
                                <input type="submit" class="btn btn-primary" value="Submit">
                                <a href="list" class="btn btn-secondary ml-2">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>