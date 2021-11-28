<?php
// Include config file
require_once "../modules/Data/config.php";

// Define variables and initialize with empty values
$username = $name = $email  = $role = $password = "";
$username_err = $name_err =  $email_err = $role_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Get URL parameter
    $id =  trim($_GET["id"]);

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
        $sql = "UPDATE _user SET username=?, password=?, name=?, email=?, rol_id=? WHERE id=?";

        if($stmt = mysqli_prepare($link, $sql)){

            // Set parameters
            $param_username = $username;
            $param_name = $name;
            $param_email = $email;
            $param_role = $role;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            $param_id = $id;

            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $param_username, $param_password, $param_name, $param_email, $param_role, $param_id);


            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("Location: " . $go_back);
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
        $sql = "SELECT * FROM _user WHERE id = ?";
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
                    $username = $row["username"];
                    $password = $row["password"];
                    $name = $row["name"];
                    $email = $row["email"];
                    $role = $row["rol_id"];

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
