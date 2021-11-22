<?php
// Include config file
require_once "../modules/Data/config.php";

// Attempt select query execution
$sql = "SELECT * FROM news";
$result = mysqli_query($link, $sql);
if($result) {
    $count = mysqli_num_rows($result);
}  else {
    echo "Oops! Something went wrong. Please try again later.";
}