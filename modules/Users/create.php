<?php
// Include config file
require_once "../modules/Data/config.php";

// Define variables and initialize with empty values
$username = $name = $email  = $role = $password = "";
$username_err = $name_err =  $email_err = $role_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
    $input_username = trim($_POST["username"]);
    if(empty($input_username)){
        $username_err = "Please enter a username.";
    } else{
        $username = $input_username;
    }

    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter name.";
    } else{
        $name = $input_name;
    }

    // Validate email
    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Please enter the email.";
    } else {
        $email = $input_email;
    }

    // Validate role
    $input_password = trim($_POST["password"]);
    if(empty($input_password)){
        $password_err = "Please enter the role.";
    } else {
        $password = $input_password;
    }

    // Validate role
    $input_role = trim($_POST["role"]);
    if(empty($input_role)){
        $role_err = "Please enter the role.";
    } else {
        $role = $input_role;
    }

    // Check input errors before inserting in database
    if(empty($username_err) && empty($name_err) && empty($password_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO _user (username, name, email, rol_id, password) VALUES (?, ?, ?, ?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_username, $param_name, $param_email, $param_role, $param_password);

            // Set parameters
            $param_username = $username;
            $param_name = $name;
            $param_email = $email;
            $param_role = $role;
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: users");
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