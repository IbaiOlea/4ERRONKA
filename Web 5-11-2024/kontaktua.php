<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Kontaktua</title>
    <link rel="stylesheet" type="text/css" href="revivatech.css" media="screen" />
    <link rel="icon" type="image/png" href="Logo.png" />
</head>

<body>
    <img src="Logo.png" class="fondoirudi">
    <?php
    require_once("menueus.php");
    ?>
    <div class="post">
        <h1>Kontaktua</h1>
        <br>
        <h3>Harremanetarako informazioa:</h3>
        <div>
            <p><strong>Helbidea:</strong> RevivaTech, Donostia, Gipuzkoa, Euskal Herria</p>
            <p><strong>Telefonoa:</strong> +34 123 456 789</p>
            <p><strong>Telefonoa (arreta teknikoa):</strong> +34 987 654 321</p>
            <p><strong>Emaila (orokorra):</strong> info@revivatech.com</p>
            <p><strong>Emaila (laguntza teknikoa):</strong> support@revivatech.com</p>
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