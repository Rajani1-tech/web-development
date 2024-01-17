<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arithmetic Exception Handling</title>
</head>
<body>

    <h1>Arithmetic Exception Handling in PHP</h1>

    <?php
    // PHP code starts here

    function divideNumbers($numerator, $denominator) {
        // Use a try-catch block to handle the exception
        try {
            if ($denominator == 0) {
                // Throw an exception if the denominator is zero
                throw new Exception("Cannot divide by zero.");
            }

            // Perform the division if the denominator is not zero
            $result = $numerator / $denominator;
            echo "<p>Result of division: $result</p>";
        } catch (Exception $e) {
            // Catch and handle the exception
            echo "<p>Error: " . $e->getMessage() . "</p>";
        }
    }

    // Example usage
    divideNumbers(10, 2); // Valid division
    divideNumbers(8, 0);  // Division by zero

    // PHP code ends here
    ?>

</body>
</html>
