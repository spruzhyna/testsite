<!DOCTYPE html>
<html>
<head>
    <title>Restaurant Black Goose Bistro</title>
    <link rel="shortcut icon" href="images/burger-logo.png">
    <script src="scripts/scripts.js"></script>
    <link rel="stylesheet" href="style/style.css">
    <style src="style/style.css"></style>
    <link rel='stylesheet' type='text/css' href='style/style.css' />
</head>
<body>
<header>
    <div class="header-left">
        <a href="index2.html" target="_blank"> Menu</a>
        <a href="http://lindbaum.de" target="_blank"> Lindbaum</a>
        <a href="categories.php" target="_blank"> Categories</a>
    </div>
    <div class="header-right">
        <a href="https://www.w3schools.com/howto/howto_css_responsive_header.asp" target="_blank">Header</a>
    </div>
</header>
<div id="root">
    <img src="images/blackgoose.png">
    <div class ="h1-style">
    <h1>Black Goose Bistro</h1>
        </div>
    <h2>The Restaurant</h2>
    <p>
        The Black Goose Bistro offers casual lunch and dinner fare in a relaxed atmosphere.
        The menu changes regularly to highlight the freshest local ingredients.
    </p>
    <h2>Catering</h2>
    <p>
        You have fun.<em>
            We'll handle the cooking.
        </em>Black Goose Catering can handle events from snacks for a meetup to elegant corporate fundraisers.
    </p>
    <h2>Location and Hourste</h2>
    <p>
        Seekonk, Massachusetts; <br>
        Monday through Thursday 11am to 9pm; <br>
        Friday and Saturday, 11am to midnight
    </p>
    <button onclick="windowAlert()">Click Me!</button>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img
                    src="https://th.bing.com/th/id/R.82489b1bccde641cc486589e50afc262?rik=lGFkRHQJSvow4g&pid=ImgRaw&r=0"
                    style="width:100%"
            >
            <div class="text">Black Burger</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img
                    src="https://th.bing.com/th/id/R.2ed492069f4b9730bcc4fe9e071bf807?rik=hY0ey3jcdscaqg&riu=http%3a%2f%2f4.bp.blogspot.com%2f_IwNN_x0zK2k%2fTA-BZ-5nGPI%2fAAAAAAAAAAU%2f04l2C0XsMEU%2fs1600%2fKrabbyPatty.jpg&ehk=5vCyrdB6VleOS0pagvgMkKxN73qHyeIPycs42npijAo%3d&risl=&pid=ImgRaw&r=0"
                    style="width:100%"
            >
            <div class="text">Crab's burger</div>
        </div>
        <div class="mySlides fade" >
            <div class="numbertext">3 / 3</div>
            <img
                    src="https://th.bing.com/th/id/OIP.WbjMfkcT4bh-2rXX5XqVkgHaKq?pid=ImgDet&rs=1"
                    style="width:100%"
            >
            <div class="text">Burger</div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center;display: flex;margin-left: auto;margin-right: auto;">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
</div>
        <span>
        <?php
        date_default_timezone_set('Europe/Berlin');
        $date = date('d.m.y h:i:s');
        echo $date;
        ?>
    </span>
<footer>
  <div class="footer-link">
    <a href="https://www.w3schools.com/tags/tag_footer.asp" target="_blank"> Tag footer</a>
  </div>
</footer>
</body>
</html>