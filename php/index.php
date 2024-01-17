<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details Form</title>
</head>
<body>

    <h1>Student Details Form</h1>

    <form action="p25.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br>
        <br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required><br>
        <br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br>
        <br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br>
        <br>

        <input type="submit" value="Submit">
    </form>

</body>
</html>
