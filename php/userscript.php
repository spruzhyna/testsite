<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully\n";
$sql= "CREATE TABLE Users (
     id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    order_type VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

if ($conn->query($sql) === TRUE) {
    die( "Tables created successfully");
} else {
    die( "Error creating tables: " . $conn->error);
}

$conn->close();


?>