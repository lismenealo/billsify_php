<?php
// Include config file
require_once "../modules/Data/config.php";

$my_appointments = null;
$count = 0;
// Check input errors before inserting in database
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
    // Prepare an insert statement
    $sql = "SELECT * FROM appointment INNER JOIN _user ON appointment.user_id = _user.id WHERE username='{$_SESSION['username']}'";

    // Attempt to execute the prepared statement
    $my_appointments = mysqli_query($link, $sql);
    if($my_appointments) {
        $count = mysqli_num_rows($my_appointments);
    }  else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}