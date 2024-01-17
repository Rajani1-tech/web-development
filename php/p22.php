<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processed Patient Form Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: left;
            height: 100vh;
        }

        .container {
            margin: 0 auto;
            text-align: left;
        }

        p {
            margin-bottom: 8px;
        }
    </style>
</head>
<body>

    <div class="container">

        <?php
        // PHP code to display user-input values
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST["name"]);
            $address = htmlspecialchars($_POST["address"]);
            $gender = isset($_POST["gender"]) ? htmlspecialchars($_POST["gender"]) : "Not specified";
            $age = isset($_POST["age"]) ? htmlspecialchars($_POST["age"]) : "22";
            $email = htmlspecialchars($_POST["email"]);
            $password = "********"; // You might want to implement secure password handling
        ?>

        <h2>Processed Patient Form Data</h2>
        <p>Name: <?php echo $name; ?></p>
        <p>Address: <?php echo $address; ?></p>
        <p>Gender: <?php echo $gender; ?></p>
        <p>Age: <?php echo $age; ?></p>
        <p>Email: <?php echo $email; ?></p>
        <p>Password: <?php echo $password; ?></p>

        <?php
        }
        else {
            echo "<p>No data submitted.</p>";
        }
        ?>

    </div>

</body>
</html>
