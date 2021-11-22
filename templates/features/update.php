<?php
require_once "../modules/Features/update.php";
?>

<!-- Main -->
<section id="main">
    <div class="container">
        <header>
            <h2>Update App Feature</h2>
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
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control <?php echo (!empty($title_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $title; ?>">
                                    <span class="invalid-feedback"><?php echo $title_err;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control <?php echo (!empty($description_err)) ? 'is-invalid' : ''; ?>" id="pclu-textarea"><?php echo $description; ?></textarea>
                                    <span class="invalid-feedback"><?php echo $description_err;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Tech Stack</label>
                                    <input type="text" name="tech_stack" class="form-control <?php echo (!empty($tech_stack_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $tech_stack; ?>">
                                    <span class="invalid-feedback"><?php echo $tech_stack_err;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Time Duration</label>
                                    <input type="number" name="time" class="form-control <?php echo (!empty($time_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $time; ?>">
                                    <span class="invalid-feedback"><?php echo $time_err;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="fileToUpload" id="fileToUpload"  class="form-control <?php echo (!empty($image_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $image; ?>">
                                    <span class="invalid-feedback"><?php echo $image_err;?></span>
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