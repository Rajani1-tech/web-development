<?php
// Set cookies with variables
$name = "Rajani Lamichhane";
$age = 22;

// Set cookies with a 1-hour expiration time
setcookie("user_name", $name, time() + 3600, "/");
setcookie("user_age", $age, time() + 3600, "/");

echo "Cookies have been set.";
?>
