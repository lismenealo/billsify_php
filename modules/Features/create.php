<?php
// Include config file
require_once "../modules/Data/config.php";

// Define variables and initialize with empty values
$title = $description = $tech_stack = $time = $image  = "";
$title_err = $description_err = $tech_stack_err = $time_err = $image_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_title = trim($_POST["title"]);
    if(empty($input_title)){
        $title_err = "Please enter a name.";
    } elseif(!filter_var($input_title, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $title_err = "Please enter a valid name.";
    } else{
        $title = $input_title;
    }

    // Validate address
    $input_description = trim($_POST["description"]);
    if(empty($input_description)){
        $description_err = "Please enter an address.";
    } else{
        $description = $input_description;
    }

    // Validate salary
    $input_tech_stack = trim($_POST["tech_stack"]);
    if(empty($input_tech_stack)){
        $tech_stack_err = "Please enter the salary amount.";
    } else {
        $tech_stack = $input_tech_stack;
    }

    // Check input errors before inserting in database
    if(empty($title_err) && empty($description_err) && empty($tech_stack_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO app_features (title, description, tech_stack) VALUES (?, ?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_title, $param_description, $param_tech_stack);

            // Set parameters
            $param_title = $title;
            $param_description = $description;
            $param_tech_stack = $tech_stack;

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