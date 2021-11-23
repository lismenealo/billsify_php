<?php
// Process delete operation after confirmation
// Include config file
require_once "../modules/Data/config.php";

// Prepare a delete statement
$sql = "DELETE FROM _user WHERE id = ?";

if($stmt = mysqli_prepare($link, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "i", $param_id);

    // Set parameters
    $param_id = trim($_GET["id"]);

    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        // Records deleted successfully. Redirect to landing page
        header("location: users");
        exit();
    } else{
        echo "Oops! Something went wrong. Please try again later.";
    }
}

// Close statement
mysqli_stmt_close($stmt);

// Close connection
mysqli_close($link);

// Check existence of id parameter
if(empty(trim($_GET["id"]))){
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error");
    exit();
}
