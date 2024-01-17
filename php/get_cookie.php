<?php
// Retrieve and display cookie values
$userName = isset($_COOKIE["user_name"]) ? $_COOKIE["user_name"] : "Guest";
$userAge = isset($_COOKIE["user_age"]) ? $_COOKIE["user_age"] : "Unknown";

echo "Welcome, $userName!<br>";
echo "Your age is $userAge.";
?>
