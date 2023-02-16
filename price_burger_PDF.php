<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo "<script type='text/javascript'>
    window.location.href = 'testsite.com/404.php';
    </script>";
}
$sql = "SELECT id, burgername, UrlImage  FROM Burgers";
$result = $conn->query($sql);
?>