<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'billsify');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$isAdmin = false;
$isClient = false;
$role_name = 'User';

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
    switch ($_SESSION["role"]) {
        case 1:
            $isAdmin = true;
            $role_name = 'Admin';
            break;
        case 3:
            $isClient = true;
            $role_name = 'Client';
            break;
        default:
            break;
    }
}