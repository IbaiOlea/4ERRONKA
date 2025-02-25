<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Kontaktua</title>
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
    <li><a href="kontaktua.php"><img src="ikurriña.png"  width="24" height="16"></a></li>
    <li><a href="contact.php"><img src="inglaterra.png"  width="24" height="16"></a></li>
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
        <a href="contact.php"><img src="inglaterra.png"  width="24" height="16"></a>
        <a href="kontaktua.php"><img src="ikurriña.png"  width="24" height="16"></a>
    </div>

    <script>
        function toggleMenu() {
            document.getElementById("sideMenu").classList.toggle("active");
        }
    </script>
    <div class="post">
        <h1>Kontaktua</h1>
        <br>
        <h3>Harremanetarako informazioa:</h3>
        <div>
            <p><strong>Helbidea:</strong> RigbyTech, Iruña, Nafarroa</p>
            <p><strong>Telefonoa:</strong> +34 632 33 28 79</p>
            <p><strong>Telefonoa (arreta teknikoa):</strong> +34 944 73 90 56</p>
            <p><strong>Emaila (orokorra):</strong> info@rigbytech.com</p>
            <p><strong>Emaila (laguntza teknikoa):</strong> support@rigbytech.com</p>
        </div>
        <br>

        <h3>Jar zaitez gurekin harremanetan:</h3>
        <div>
            <form action="/submit_contact" method="post">
                <div>
                    <label for="name">Zure Izena:</label><br>
                    <input type="text" id="name" name="name" required><br><br>
                </div>

                <div>
                    <label for="email">Zure Emaila:</label><br>
                    <input type="email" id="email" name="email" required><br><br>
                </div>

                <div>
                    <label for="subject">Gaia:</label><br>
                    <input type="text" id="subject" name="subject" required><br><br>
                </div>

                <div>
                    <label for="message">Zure Mezua:</label><br>
                    <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>
                </div>

                <input type="submit" value="Bidali Eskaera">
            </form>
        </div>
    </div>
    <?php
    require_once("footer.php");
    ?>
</body>

</html>