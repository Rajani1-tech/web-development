<?php
$username = $_POST["Username"];
$Password = $_POST["Password"];
$Username = "";
$Password = " ";

if ($Username == $Username && $Password == $Password) {
    header("location: welcome.php");
    exit();
} else {
    echo "Error occurred."; // Added a semicolon at the end of the echo statement
}
?>
