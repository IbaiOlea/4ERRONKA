<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Saioa Hasi</title>
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
            <li><a href="saioahasi.php">EUS</a></li>
            <li><a href="signin.php">ENG</a></li>
        </ul>
</div>
    <div class="post">
        <h1>Saioa Hasi</h1>
        <div>
            <form action="/submit_selling_request" method="post">
                <div>
                    <label for="name">Email-a:</label><br>
                    <input type="email" id="name" name="name" required><br><br>
                </div>
                <div>
                    <label for="email">Pasahitza:</label><br>
                    <input type="password" id="email" name="pass" required><br><br>
                </div>
        
                <input type="submit" value="Saioa Hasi">
            </form>
        </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["name"];
            $password = $_POST["pass"];
        
            
            $servername = "localhost";
            $db_username = "root";
            $db_password = "1MG2024";
            $dbname = "2erronka";
        
            
            $conn = new mysqli($servername, $db_username, $db_password, $dbname);
            
           
            if ($conn->connect_error) {
                die("Error de conexión: " . $conn->connect_error);
            }
        
            
            $stmt = $conn->prepare("SELECT Pasahitza FROM erabiltzaileak WHERE Eposta = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();
        
            if ($stmt->num_rows > 0) {
                
                $stmt->bind_result($hashed_password);
                $stmt->fetch();
        
               
                if ($password === $hashed_password) { 
                    $_SESSION["user_email"] = $email;
                    header("Location: berriak.php"); 
                    exit();
                } else {
                    echo "<p style='color: red;'>Contraseña incorrecta.</p>";
                }
            } else {
                echo "<p style='color: red;'>El correo no está registrado.</p>";
            }}
        
        
       
        ?>
    </div>
    <?php
    require_once("footer.php");
    ?>
</body>

</html>