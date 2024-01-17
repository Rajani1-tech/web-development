<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$databaseName = "weblab";
$sqlCreateDatabase = "CREATE DATABASE IF NOT EXISTS $databaseName";
if ($conn->query($sqlCreateDatabase) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select the created database
$conn->select_db($databaseName);

// Create table
$tableName = "student";
$sqlCreateTable = "CREATE TABLE IF NOT EXISTS $tableName (
    id INT AUTO_INCREMENT PRIMARY KEY,
    column_name VARCHAR(255) NOT NULL
)";
if ($conn->query($sqlCreateTable) === TRUE) {
    echo "Table created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Add column to table
$columnName = "name";
$sqlAddColumn = "ALTER TABLE $tableName ADD COLUMN $columnName INT";
if ($conn->query($sqlAddColumn) === TRUE) {
    echo "Column added to the table successfully<br>";
} else {
    echo "Error adding column to the table: " . $conn->error . "<br>";
}

// Close connection
$conn->close();
?>
