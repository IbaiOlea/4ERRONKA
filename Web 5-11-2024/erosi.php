<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Erosi</title>
    <link rel="stylesheet" type="text/css" href="rigbytech.css" media="screen" />
    <link rel="icon" type="image/png" href="Logoa.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <img src="Logoa.png" class="fondoirudi">
    <div class="top">
        <p class="name">RigbyTech</p>
        <p class="slogan">Rigbyrekin, etorkizuna programatzen! </p>
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
</ul>
</div>
<div class="menu-toggle" onclick="toggleMenu()">☰</div>

    
    <div class="side-menu" id="sideMenu">
        <span class="close-btn" onclick="toggleMenu()">×</span>
        <a href="berriak.php">Berriak</a>
        <a href="guriburuz.php">Guri Buruz</a>
        <a href="erosi.php">Erosi</a>
        <a href="saldu.php">Saldu</a>
        <a href="kontaktua.php">Kontaktua</a>
        <a href="saioahasi.php">Saioa Hasi</a>
        <a href="buy.php"><img src="inglaterra.png"  width="24" height="16"></a>
        <a href="erosi.php"><img src="ikurriña.png"  width="24" height="16"></a>
    </div>

    <script>
        function toggleMenu() {
            document.getElementById("sideMenu").classList.toggle("active");
        }
    </script>
    <div class="post">
        <h1>Erosi</h1>
        <p>Jarraian salgai ditugun produktuak ikus ditzakezu:</p>
        <div class="product-list">
        <?php
        require_once("db.php");
        ?>   
        </div>
        
    </div>
    <?php
    require_once("footer.php");
    ?>

</body>

</html>