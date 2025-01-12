<?php
// Database configuration
error_reporting(0);
$servername = "localhost";
$username = "Root";
$password = "";
$database = "gym_form";

// Create connection
$conn =  mysqli_connect($servername, $username, $password, $database);

// Check connection
if($conn)
{
    // echo "connection ok";
}
else
{
    echo "connection faild".mysqli_connect_error();
}

?>
