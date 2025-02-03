<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Sell</title>
    <link rel="stylesheet" type="text/css" href="revivatech.css" media="screen" />
    <link rel="icon" type="image/png" href="Logo.png"/>
</head>

<body>
    <img src="Logo.png" class="fondoirudi">
    <div class="top">
        <p class="name">RigbyTech</p>
        <p class="slogan">Reuse technology, protect the future.</p>
        <img src="Logo.png" class="topimg">
        <ul class="menu">
            <li><a href="news.php">News</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="buy.php">Buy</a></li>
            <li><a href="sell.php" class="orain">Sell</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <ul class="language">
            <li><a href="saldu.php">EUS</a></li>
            <li><a href="sell.php" class="orain">ENG</a></li>
        </ul>
    </div>
    <div class="post">
        <h1>Sell Your Device</h1>
        <div>
            <form action="/submit_selling_request" method="post">
                <div>
                    <label for="name">Your Name:</label><br>
                    <input type="text" id="name" name="name" required><br><br>
                </div>

                <div>
                    <label for="email">Your Email:</label><br>
                    <input type="email" id="email" name="email" required><br><br>
                </div>

                <div>
                    <label for="phone">Phone Number:</label><br>
                    <input type="tel" id="phone" name="phone" pattern="[0-9]{9}" required><br><br>
                </div>

                <div>
                    <label for="device_type">Device Type:</label><br>
                    <select id="device_type" name="device_type" required>
                        <option value="" disabled selected>Select Device Type</option>
                        <option value="laptop">Laptop</option>
                        <option value="desktop">Desktop</option>
                        <option value="tablet">Tablet</option>
                        <option value="phone">Phone</option>
                        <option value="other">Other</option>
                    </select><br><br>
                </div>

                <div>
                    <label for="device_condition">Device Condition:</label><br>
                    <select id="device_condition" name="device_condition" required>
                        <option value="" disabled selected>Select Device Condition</option>
                        <option value="new">New</option>
                        <option value="used_good">Used, good condition</option>
                        <option value="used_fair">Used, fair condition</option>
                        <option value="used_poor">Used, poor condition</option>
                        <option value="damaged">Damaged</option>
                    </select><br><br>
                </div>

                <div>
                    <label for="description">Device Description:</label><br>
                    <textarea id="description" name="description" rows="4" cols="50"
                        placeholder="Enter the device's features, issues, or any other information here."
                        required></textarea><br><br>
                </div>

                <div>
                    <label for="image">Device Image (optional):</label><br>
                    <input type="file" id="image" name="image" accept="image/*"><br><br>
                </div>

                <input type="submit" value="Submit Request">
            </form>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2024 RevivaTech. All rights reserved.</p>
    </div>
</body>

</html>