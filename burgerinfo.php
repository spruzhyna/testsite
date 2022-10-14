<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="shortcut icon" href="images/burger-logo.png">
        <link rel="stylesheet" href="style/style.css">
        
    </head>
<body>
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
$sql = "SELECT id, burgername, UrlImage, Info  FROM Burgers";
$result = $conn->query($sql);
?>

<?php
if ($result) {
    while($row = mysqli_fetch_array($result)) {
        if( $row["id"] === $_GET['id']) {
?>
        <a class="container-burger" href="http://testsite.com/orderburger.php/id: <?php echo $row ["id"]?> ">
            <img src="<?php echo $row["UrlImage"] ?>" alt="photo" />
            <div class="text"><?php echo $row["burgername"]?> </div>
            <div class="info"><?php echo $row["Info"]?></div>
        </a>
    <?php
    }

}
  $conn->close();
} else {
  echo "0 results";
  $conn->close();
}

?>
</body>
</html>