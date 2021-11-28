<?php
// Include config file
require_once "../modules/Data/config.php";

// Define variables and initialize with empty values
$title = $description = $tech_stack = $time = $image  = "";
$title_err = $description_err = $tech_stack_err = $time_err = $image_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $image_height = 0;
    $image_width = 0;
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        $image_width = $check[0];
        $image_height = $check[1];
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Validate title
    $input_title = trim($_POST["title"]);
    if(empty($input_title)){
        $title_err = "Please enter a title.";
    } elseif(!filter_var($input_title, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $title_err = "Please enter a valid title.";
    } else{
        $title = $input_title;
    }

    // Validate description
    $input_description = trim($_POST["description"]);
    if(empty($input_description)){
        $description_err = "Please enter an description.";
    } else{
        $description = $input_description;
    }

    // Validate tech_stack
    $input_tech_stack = trim($_POST["tech_stack"]);
    if(empty($input_tech_stack)){
        $tech_stack_err = "Please enter the tech stack.";
    } else {
        $tech_stack = $input_tech_stack;
    }

    // Validate image
    $input_image = $target_file;
    if(empty($input_image)){
        $image_err = "Please enter the image.";
    } else {
        $image = $input_image;
    }

    // Validate time
    $input_time = trim($_POST["time"]);
    if(empty($input_time)){
        $time_err = "Please enter the time.";
    } else {
        $time = $input_time;
    }

    // Check input errors before inserting in database
    if(empty($title_err) && empty($description_err) && empty($tech_stack_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO app_features (title, description, tech_stack, image, time, image_size) VALUES (?, ?, ?, ?, ?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $param_title, $param_description, $param_tech_stack, $param_image, $param_time, $image_width.'x'.$image_height);

            // Set parameters
            $param_title = $title;
            $param_description = $description;
            $param_tech_stack = $tech_stack;
            $param_image = $image;
            $param_time = $time;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: app_features");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}