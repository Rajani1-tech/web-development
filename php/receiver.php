<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receiver Page</title>
</head>
<body>

    <h2>Receiver Page</h2>

    <?php
    // Retrieve and display the variables from the URL
    $receivedName = isset($_GET['name']) ? $_GET['name'] : 'No Name';
    $receivedAge = isset($_GET['age']) ? $_GET['age'] : 'No Age';

    echo "<p>Name: " . htmlspecialchars($receivedName) . "</p>";
    echo "<p>Age: " . htmlspecialchars($receivedAge) . "</p>";
    ?>

</body>
</html>
