<!DOCTYPE html>
<html>
    <head>
        <title>Categories</title>
        <link rel="shortcut icon" href="images/burger-logo.png">
        <link rel="stylesheet" href="style/style.css">
        <style src="style/style.css"></style>
    </head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo "<script type='text/javascript'>
    window.location.href = 'testsite.com/404.php';
    </script>";
}
$conn->close();
?>

<header>
    <h1 id="bgbm2">Categories</h1>
</header>
    <div class="food-categories">
    </div>
    <div class="food-categories">
        </div>
    <div class="product-categories">
     <div class="burger-salad">  
        <a href="salat.php" target="_blank">
            
        </div>
            <img src="https://www.momontimeout.com/wp-content/uploads/2021/06/fruit-salad-square.jpeg" alt="photo" />
                <span class="item-txt">Salat´s</span>
        </a>
        <div class="burger-salad">
        <a href="burger.php" target="_blank">
        </div>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeRC-gBHwsSzdRr52iYTQ-myf9k7jemDgYr-9FXrWKC7yCMQtF9I8m_1e2--k8Gao7_us&usqp=CAU" alt="photo" />
            <span class="item-txt">Burgers</span>
        </a>
    </div>
</body>
</html>