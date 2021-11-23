<?php
require_once "../modules/News/create.php";
?>

<!-- Main -->
<section id="main">
    <div class="container">
        <header>
            <h2>Create News</h2>
        </header>
        <div class="row aln-center">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Please fill this form and submit to add employee record to the database.</p>
                            <form action="news_feed_create" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control <?php echo (!empty($title_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $title; ?>">
                                    <span class="invalid-feedback"><?php echo $title_err;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Body</label>
                                    <textarea name="body" class="form-control <?php echo (!empty($body_err)) ? 'is-invalid' : ''; ?>" id="pclu-textarea"><?php echo $body; ?></textarea>
                                    <span class="invalid-feedback"><?php echo $body_err;?></span>
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="fileToUpload" id="fileToUpload"  class="form-control <?php echo (!empty($image_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $image; ?>">
                                    <span class="invalid-feedback"><?php echo $image_err;?></span>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Submit">
                                    <a class="btn btn-link ml-2" href="news_feed">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>