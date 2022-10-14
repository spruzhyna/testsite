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
echo "Connected successfully";
$queryies = array (
"CREATE TABLE Burgers (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    burgername VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )",
"CREATE TABLE Salats (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    salatname VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )",
"CREATE TABLE Categories (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    categoriesname VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )",
)  ;  


foreach($queryies as $sql) {
    if ($conn->query($sql) === TRUE) {
        echo "Single table has been created successfully";
    } else {
        echo "Error cr‚eating tables: " . $conn->error;
    }
}
$conn->close();
?>