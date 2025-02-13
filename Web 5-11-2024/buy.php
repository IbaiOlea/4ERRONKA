<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Buy</title>
    <link rel="stylesheet" type="text/css" href="rigbytech.css" media="screen" />
    <link rel="icon" type="image/png" href="Logoa.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <img src="Logoa.png" class="fondoirudi">
    <div class="top">
        <p class="name">RigbyTech</p>
        <p class="slogan">With Rigby, programming the future! </p>
        <img src="Logoa.png" class="topimg">
        <ul class="menu">
            <li><a href="berriak.php">Berriak</a></li>
            <li><a href="guriburuz.php">Guri Buruz</a></li>
            <li><a href="erosi.php">Erosi</a></li>
            <li><a href="saldu.php">Saldu</a></li>
            <li><a href="kontaktua.php">Kontaktua</a></li>
            <li class="s"><a href="saioahasi.php">Saioa Hasi</a></li>
        </ul>
        <ul class="language">
    <li><a href="erosi.php"><img src="ikurriña.png"  width="24" height="16"></a></li>
    <li><a href="buy.php"><img src="inglaterra.png"  width="24" height="16"></a></li>
    <li><a href="cesta.php"><img src="shopping-basket-icon-simple-style-vector.png"  width="30" height="22"></a></li>
</ul>
</div>
<div class="menu-toggle" onclick="toggleMenu()">☰</div>

    
    <div class="side-menu" id="sideMenu">
        <span class="close-btn" onclick="toggleMenu()">×</span>
        <a href="news.php">News</a>
        <a href="aboutus.php">About Us</a>
        <a href="buy.php">Buy</a>
        <a href="sell.php">Sell</a>
        <a href="contact.php">Contact</a>
        <a href="signin.php">Sign In</a>
        </
        <ul class="language">
        <a href="buy.php"><img src="inglaterra.png"  width="24" height="16"></a>
        <a href="erosi.php"><img src="ikurriña.png"  width="24" height="16"></a>
        <li><a href="cesta.php"><img src="shopping-basket-icon-simple-style-vector.png"  width="30" height="22"></a></li>
    </div>

    <script>
        function toggleMenu() {
            document.getElementById("sideMenu").classList.toggle("active");
        }
    </script>
    <div class="post">
        <h1>Buy</h1>
        <p>Below you can see the products we have for sale:</p>
        <div class="product-list">
        <?php
    require_once("dben.php");
    ?>
            
        </div>
    </div>
    <?php
    require_once("footer.php");
    ?>
</body>

</html>
