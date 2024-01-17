<?php
// Assuming you have a MySQL database set up
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form
$name = $_POST["name"];
$address = $_POST["address"];
$phone = $_POST["phone"];
$age = $_POST["age"];
$gender = $_POST["gender"];

// Prepare and execute SQL statement to insert data into the database
$sql = "INSERT INTO webtech (name, address, phone, age, gender) VALUES ('$name', '$address', '$phone', '$age', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "Student details successfully stored in the database.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
