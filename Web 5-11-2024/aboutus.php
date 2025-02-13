<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>About Us</title>
    <link rel="stylesheet" type="text/css" href="rigbytech.css" media="screen" />
    <link rel="icon" type="image/png" href="Logoa.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
</head>

<body>
    <img src="logoa.png" class="fondoirudi">
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
    <li><a href="guriburuz.php"><img src="ikurriña.png"  width="24" height="16"></a></li>
    <li><a href="aboutus.php"><img src="inglaterra.png"  width="24" height="16"></a></li>
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
        <a href="aboutus.php"><img src="inglaterra.png"  width="24" height="16"></a>
        <a href="guriburuz.php"><img src="ikurriña.png"  width="24" height="16"></a>
    </div>

    <script>
        function toggleMenu() {
            document.getElementById("sideMenu").classList.toggle("active");
        }
    </script>

       
    <div class="post">
    <h1>About Us</h1>        
<div>             
<h2 class="letterTitle">RigbyTech: Innovation for a Greener Future.</h2> 
<p><strong>RigbyTech</strong> is a company committed to transforming technology management sustainably. Founded in 2023, we specialize in refurbishing and reusing second-hand electronic devices, giving them a second life and reducing environmental impact. <br><br> 

Our goal is to make sustainable technology accessible to everyone. We collaborate with local communities to collect unused or damaged electronic devices. Our experts inspect, repair, and reintroduce them into the market. This helps reduce electronic waste while providing high-quality and affordable technological solutions. <br><br> 

At RigbyTech, we believe that technology and sustainability must go hand in hand in the future. Through continuous innovation, we strive to offer eco-friendly alternatives that benefit both our customers and the planet. </p> 
<br> 

<h2 class="letterTitle">Our Values</h2> 
<p>We are committed to:</p> 
<ul> 
<li class="text"><strong>Environmental care:</strong> Reducing electronic waste and promoting a circular economy.</li> 
<li class="text"><strong>Reliability:</strong> Ensuring that all refurbished devices meet high standards of performance and durability.</li> 
<li class="text"><strong>Innovation:</strong> Developing new ways to extend the life of technology and reduce its environmental impact.</li> 
<li class="text"><strong>Community collaboration:</strong> Partnering with local organizations to promote responsible technology consumption.</li> 
</ul> 
<br> 

<h2 class="letterTitle">How We Work</h2> 
<p>Our process is simple and efficient:</p> 
<ol> 
<li class="text"><strong>Device collection:</strong> Individuals and businesses can donate or sell their used devices through our website.</li> 
<li class="text"><strong>Evaluation and repair:</strong> Our specialists examine each component, repairing what can be fixed and reusing salvageable parts.</li> 
<li class="text"><strong>Sales and distribution:</strong> Refurbished devices are made available in our online store, making sustainable technology more accessible.</li> 
<li class="text"><strong>Responsible recycling:</strong> Non-repairable parts are recycled in an environmentally friendly manner.</li> 
</ol> 
<br> 

<h2 class="letterTitle">Our Facilities</h2> 
<p>We operate in strategic locations across the Basque Country:</p> 
<ul> 
<li class="text"><strong>Donostia:</strong> Our main recycling center, where devices are received and sorted.</li> 
<li class="text"><strong>Bilbao:</strong> The main facility where devices are restored to excellent condition.</li> 
<li class="text"><strong>Vitoria-Gasteiz:</strong> A center specialized in component recovery and sustainable technology.</li> 
</ul>


            <br>

            <iframe src="https://www.google.com/maps/d/embed?mid=1AaNFfC9p8v0YUPMLxh5_vBfIHci55g0&ehbc=2E312F" width="99%" height="480"></iframe>
        </div>
    </div>
    <?php
    require_once("footer.php");
    ?>
    
</body>

</html>
