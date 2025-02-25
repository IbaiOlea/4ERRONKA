<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Saldu</title>
    <link rel="stylesheet" type="text/css" href="rigbytech.css" media="screen" />
    <link rel="icon" type="image/png" href="Logoa.png"/>
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
    <li><a href="saldu.php"><img src="ikurriña.png"  width="24" height="16"></a></li>
    <li><a href="sell.php"><img src="inglaterra.png"  width="24" height="16"></a></li>
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
        <a href="news.php"><img src="inglaterra.png"  width="24" height="16"></a>
        <a href="berriak.php"><img src="ikurriña.png"  width="24" height="16"></a>
    </div>

    <script>
        function toggleMenu() {
            document.getElementById("sideMenu").classList.toggle("active");
        }
    </script>
    <div class="post">
        <h1>Zure Gailua Saldu</h1>
        <div>
            <form action="/submit_selling_request" method="post">
                <div>
                    <label for="name">Zure Izena:</label><br>
                    <input type="text" id="name" name="name" required><br><br>
                </div>
                <div>
                    <label for="email">Zure Emaila:</label><br>
                    <input type="email" id="email" name="email" required><br><br>
                </div>
                <div>
                    <label for="phone">Telefono Zenbakia:</label><br>
                    <input type="tel" id="phone" name="phone" pattern="[0-9]{9}" required><br><br>
                </div>
                <div>
                    <label for="device_type">Gailu Mota:</label><br>
                    <select id="device_type" name="device_type" required>
                        <option value="" disabled selected>Hautatu Gailu Mota</option>
                        <option value="laptop">Ordenagailu eramangarria</option>
                        <option value="desktop">Mahai gaineko Ordenagailua</option>
                        <option value="tablet">Tableta</option>
                        <option value="phone">Mugikorra</option>
                        <option value="other">Beste bat</option>
                    </select><br><br>
                </div>
                <div>
                    <label for="device_condition">Gailuaren Egoera:</label><br>
                    <select id="device_condition" name="device_condition" required>
                        <option value="" disabled selected>Hautatu Gailuaren Egoera</option>
                        <option value="new">Berria</option>
                        <option value="used_good">Erabilitakoa, egoera onean</option>
                        <option value="used_fair">Erabilitakoa, egoera ertainean</option>
                        <option value="used_poor">Erabilitakoa, egoera txarrean</option>
                        <option value="damaged">Kaltetua</option>
                    </select><br><br>
                </div>
                <div>
                    <label for="description">Gailuaren Deskribapena:</label><br>
                    <textarea id="description" name="description" rows="4" cols="50"
                        placeholder="Sartu gailuaren ezaugarriak, arazoak edo bestelako informazioa hemen."
                        required></textarea><br><br>
                </div>
                <div>
                    <label for="image">Gailuaren Irudia (hautazkoa):</label><br>
                    <input type="file" id="image" name="image" accept="image/*"><br><br>
                </div>
                <input type="submit" value="Eskaera Bidali">
            </form>
        </div>
    </div>
    <?php
    require_once("footer.php");
    ?>
</body>

</html>