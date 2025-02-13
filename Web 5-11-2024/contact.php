<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Contact</title>
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
            <li><a href="news.php">News</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="buy.php">Buy</a></li>
            <li><a href="sell.php">Sell</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="s"><a href="signin.php">Sign In</a></li>
        </ul>
        <ul class="language">
    <li><a href="kontaktua.php"><img src="ikurriña.png"  width="24" height="16"></a></li>
    <li><a href="contact.php"><img src="inglaterra.png"  width="24" height="16"></a></li>
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
        <a href="contact.php"><img src="inglaterra.png"  width="24" height="16"></a>
        <a href="kontaktua.php"><img src="ikurriña.png"  width="24" height="16"></a>
    </div>

    <script>
        function toggleMenu() {
            document.getElementById("sideMenu").classList.toggle("active");
        }
    </script>
    <div class="post">
        <h1>Contact</h1>
        <br>
        <h3>Contact Information:</h3>
        <div>
            <p><strong>Address:</strong> RigbyTech, Iruña, Nafarroa</p>
            <p><strong>Phone:</strong> +34 632 33 28 79</p>
            <p><strong>Phone (technical support):</strong> +34 944 73 90 56</p>
            <p><strong>Email (general):</strong> info@rigbytech.com</p>
            <p><strong>Email (technical support):</strong> support@rigbytech.com</p>
        </div>
        <br>
        <h3>Get in Touch with Us:</h3>
        <div>
            <form action="/submit_contact" method="post">
                <div>
                    <label for="name">Your Name:</label><br>
                    <input type="text" id="name" name="name" required><br><br>
                </div>

                <div>
                    <label for="email">Your Email:</label><br>
                    <input type="email" id="email" name="email" required><br><br>
                </div>

                <div>
                    <label for="subject">Subject:</label><br>
                    <input type="text" id="subject" name="subject" required><br><br>
                </div>

                <div>
                    <label for="message">Your Message:</label><br>
                    <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>
                </div>

                <input type="submit" value="Submit Request">
            </form>
        </div>
    </div>
    <?php
    require_once("footer.php");
    ?>
</body>

</html>