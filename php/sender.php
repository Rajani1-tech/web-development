<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sender Page</title>
</head>
<body>

    <h2>Sender Page</h2>

    <?php
    // Variables to be passed through the URL
    $name = "Rajani Lamichhane";
    $age = 22;

    // Creating a URL with parameters
    $url = "receiver.php?name=" . urlencode($name) . "&age=" . urlencode($age);
    ?>

    <p><a href="<?php echo $url; ?>">Go to Receiver Page</a></p>

</body>
</html>
