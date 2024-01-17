<?php
session_start();

// Check if the session variable is set, if not, initialize it
if (!isset($_SESSION['page_views'])) {
    $_SESSION['page_views'] = 0;
}

// Increment the page views count on each refresh
$_SESSION['page_views']++;

// Display the current page views count
$currentViews = $_SESSION['page_views'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Views Counter</title>
</head>
<body>

    <h1>Welcome to the Page Views Counter</h1>

    <p>This page has been viewed <?php echo $currentViews; ?> times.</p>

</body>
</html>
