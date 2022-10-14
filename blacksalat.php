<!DOCTYPE html>
<html>
    <head>
        <title>Black Salat</title>
        <link rel="shortcut icon" href="images/burger-logo.png">
        <link rel="stylesheet" href="style/style.css">
        
    </head>
<body>
<header>
    <ul>
        <li>
            <div class="header-left">
                <a href="index.php" target="_blank"> Main</a>
                <a href="categories.php" target="_blank">Categories</a>
            </div>
            <div class="header-right">
                <a href="orderburger.php" target="_blank">Order</a>
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
$sql = "SELECT id, salatname, UrlImage  FROM Salats";
$result = $conn->query($sql);
?>
<div class="container">
<?php
if ($result) {
  // output data of each row
  while($row = mysqli_fetch_array($result)) {
    //echo "id: " . $row["id"]. " - Burger: " . $row["burgername"]. " " . $row["Categoryid"]. "<br>";
    ?>
    <a class="photo" href="http://testsite.com/orderburger.php/id: <?php echo $row ["id"]?> ">
        <img src="<?php echo $row["UrlImage"] ?>" alt="photo" />
        <div class="text"><?php echo $row["salatname"]?> </div>
  </a>
    <?php
}
  $conn->close();
} else {
  echo "0 results";
  $conn->close();
}

?>
</div>
</body>
</html>