<?php
// Include config file
require_once "../modules/Data/config.php";

$news_info = null;
$count = 0;
// Check input errors before inserting in database
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {

    $id =  trim($_GET["id"]);
    // Prepare an insert statement
    $sql = "SELECT * FROM news WHERE id='{$id}'";

    // Attempt to execute the prepared statement
    $result = mysqli_query($link, $sql);
    if($result) {
        $count = mysqli_num_rows($result);
    }  else {
        echo "Oops! Something went wrong. Please try again later.";
    }

    $news_info = mysqli_fetch_array($result);
}