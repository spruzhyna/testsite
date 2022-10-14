<!DOCTYPE html>
<html>
    <head>
        <title>Order Black Goose Bistro</title>
        <link rel="shortcut icon" href="images/burger-logo.png">
        <link rel="stylesheet" href="style/style.css">
        
    </head>
<body>
<header>
    <ul>
        <li>
            <div class="header-left">
                <a href="index.php" target="_blank"> Main</a>
            </div>
            <div class="header-right">
                <a href="categories.php" target="_blank">Categories</a>
            </div>
        </li>
    </ul>
</header>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo "<script type='text/javascript'>
    window.location.href = 'testsite.com/404.php';
    </script>";
}
?>
<h1>Your Order:</h1>
</body>
</html>