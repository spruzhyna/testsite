<!DOCTYPE html>
<html>
    <head>
        <title>Burger Menu</title>
        <link rel="shortcut icon" href="images/burger-logo.png">
        <link rel="stylesheet" href="/style/style.css">
        <style src="testsite/style/style.css"></style>
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
$sql = "SELECT id, burgername, Categoryid FROM Burgers";
$result = $conn->query($sql);

while($row = mysqli_fetch_array($result)) {
    echo "id: " . $row["id"]. " - Burger: " . $row["burgername"]. " " . $row["Categoryid"]. "<br>";
  }

if ($result) {
  // output data of each row
  while($row = mysqli_fetch_array($result)) {
    echo "id: " . $row["id"]. " - Burger: " . $row["burgername"]. " " . $row["Categoryid"]. "<br>";
  }
  $conn->close();
} else {
  echo "0 results";
  $conn->close();
}

?>
<header>
    <ul>
        <li>
            <div class="header-left">
                <a href="index.php" target="_blank"> Main</a>
                <a href="categories.php" target="_blank">Categories</a>
                <a href="#" target="_blank">Delivery</a>
            </div>
            <div class="header-right">
                <a href="salat.php" target="_blank">Salat</a>
            </div>
        </li>
    </ul>
</header>
<h1 id="bgbm">Burger Menu</h1>
<div class="wrapper">
    <div class="photo">
        <img src="https://images.lecker.de/,id=6df6dfad,b=lecker,w=610,cg=c.jpg" alt="photo" />
        <div class="text">Bacon Burger 1.50$</div>
    </div>
    <div class="photo">
        <img src="https://th.bing.com/th/id/R.2ed492069f4b9730bcc4fe9e071bf807?rik=hY0ey3jcdscaqg&riu=http%3a%2f%2f4.bp.blogspot.com%2f_IwNN_x0zK2k%2fTA-BZ-5nGPI%2fAAAAAAAAAAU%2f04l2C0XsMEU%2fs1600%2fKrabbyPatty.jpg&ehk=5vCyrdB6VleOS0pagvgMkKxN73qHyeIPycs42npijAo%3d&risl=&pid=ImgRaw&r=0" alt="photo" />
        <div class="text">Crab's burger 2.00$</div>
    </div>

    <div class="photo">
        <img src="https://th.bing.com/th/id/R.82489b1bccde641cc486589e50afc262?rik=lGFkRHQJSvow4g&pid=ImgRaw&r=0" alt="photo" />
        <div class="text">Black Burger 2.50$</div>
    </div>

    <div class="photo">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9ANCiIs_ZFypIcIXMChO2BdVDNkli0qFZAwFyO8xvjpdft3L0kuIl12rFKdCfTRG8TAk&usqp=CAU" alt="photo" />
        <div class="text">Double Burger 4.00$</div>
    </div>

    <div class="photo">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeRC-gBHwsSzdRr52iYTQ-myf9k7jemDgYr-9FXrWKC7yCMQtF9I8m_1e2--k8Gao7_us&usqp=CAU" alt="photo" />
        <div class="text">Sesame Burger 3.00$</div>
    </div>
</div>
</body>
</html>