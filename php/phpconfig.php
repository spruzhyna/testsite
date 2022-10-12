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
$sql = "CREATE TABLE Burgers (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    burgername VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
$sql = "CREATE TABLE Salats (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    salatname VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";    
$sql = "CREATE TABLE Categories (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    categoriesname VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";      
    if ($conn->query($sql) === TRUE) {
        echo "Table Burgers created successfully";
      } else {
        echo "Error creating table: " . $conn->error;
      }
      $conn->close();
?>