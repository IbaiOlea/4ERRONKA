<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="revivatech.css" media="screen" />
    <link rel="icon" type="image/png" href="Logoa.png"/>
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
            <li><a href="saioahasi.php">EUS</a></li>
            <li><a href="signin.php">ENG</a></li>
        </ul>
</div>
    <div class="post">
        <h1>Sign In</h1>
        <div>
            <form action="/submit_selling_request" method="post">
                <div>
                    <label for="name">Email:</label><br>
                    <input type="email" id="name" name="name" required><br><br>
                </div>
                <div>
                    <label for="email">Password:</label><br>
                    <input type="password" id="email" name="email" required><br><br>
                </div>
        
                <input type="submit" value="Sign In">
            </form>
        </div>
    </div>
    <?php
    require_once("footer.php");
    ?>
</body>

</html>