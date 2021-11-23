<?php
// Include config file
require_once "../modules/Data/config.php";

// Define variables and initialize with empty values
$user = $comments = $tech_stack = $time = $date  = "";
$user_err = $comments_err = $tech_stack_err = $time_err = $date_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get URL parameter
    $id =  trim($_GET["id"]);

    // Validate user
    $input_user = trim($_POST["user"]);
    if(empty($input_user)){
        $user_err = "Please enter a user.";
    } else {
        $user = $input_user;
    }

    // Validate comments
    $input_comments = trim($_POST["comments"]);
    if(empty($input_comments)){
        $comments_err = "Please enter an comments.";
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
        $sql = "UPDATE appointment SET user_id=?, comment=?, date=? WHERE id=?";

        if($stmt = mysqli_prepare($link, $sql)){

            // Set parameters
            $param_user = $user;
            $param_comments = $comments;
            $param_date = $date;
            $param_id = $id;

            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_user, $param_comments, $param_date, $param_id);


            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: appointments");
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
} else {
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);

        // Prepare a select statement
        $sql = "SELECT * FROM appointment WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);

            // Set parameters
            $param_id = $id;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);

                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                    // Retrieve individual field value
                    $user = $row["user_id"];
                    $comments = $row["comment"];
                    $date = $row["date"];

                } else {
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error");
                    exit();
                }

            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);

        // Close connection
        mysqli_close($link);
    }  else {
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error");
        exit();
    }
}
