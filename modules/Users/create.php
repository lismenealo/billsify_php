<?php
// Include config file
require_once "../modules/Data/config.php";

// Define variables and initialize with empty values
$user = $comments = $tech_stack = $time = $date  = "";
$user_err = $comments_err = $tech_stack_err = $time_err = $date_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate user
    $input_user = trim($_POST["user"]);
    if(empty($input_user)){
        $user_err = "Please enter a user.";
    } else{
        $user = $input_user;
    }

    // Validate comments
    $input_comments = trim($_POST["comments"]);
    if(empty($input_comments)){
        $comments_err = "Please enter comments.";
    } else{
        $comments = $input_comments;
    }

    // Validate date
    $input_date = trim($_POST["date"]);
    if(empty($input_date)){
        $date_err = "Please enter the date.";
    } else {
        $date = $input_date;
    }

    // Check input errors before inserting in database
    if(empty($user_err) && empty($comments_err) && empty($tech_stack_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO appointment (user_id, comment, date) VALUES (?, ?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_user, $param_comments, $param_date);

            // Set parameters
            $param_user = $user;
            $param_comments = $comments;
            $param_date = $date;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: list");
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