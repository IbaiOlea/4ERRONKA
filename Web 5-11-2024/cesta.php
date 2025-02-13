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
    <li><a href="saioahasi.php"><img src="ikurriña.png"  width="24" height="16"></a></li>
    <li><a href="signin.php"><img src="inglaterra.png"  width="24" height="16"></a></li>
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
        <a href="signin.php"><img src="inglaterra.png"  width="24" height="16"></a>
        <a href="saioahasi.php"><img src="ikurriña.png"  width="24" height="16"></a>
    </div>

    <script>
        function toggleMenu() {
            document.getElementById("sideMenu").classList.toggle("active");
        }
    </script>
    <div class="post">
    <div class="cart-section">
        <h2 style="color:white;">Cesta de compras</h2>
        <div id="cart-items">
           
        </div>
        <p>Total: $<span id="total">0</span></p>
        <button onclick="checkout()">Realizar compra</button>
    </div>

   
    

    <script>
        let cart = [];
        let total = 0;

        function addToCart(productName, productPrice) {
            cart.push({ name: productName, price: productPrice });
            total += productPrice;
            updateCart();
        }

        function updateCart() {
            let cartItemsContainer = document.getElementById('cart-items');
            cartItemsContainer.innerHTML = ''; 

            cart.forEach(item => {
                let itemElement = document.createElement('p');
                itemElement.textContent = item.name + ' - $' + item.price;
                cartItemsContainer.appendChild(itemElement);
            });

            document.getElementById('total').textContent = total;
        }

        function checkout() {
            if (cart.length > 0) {
                alert('Realizando compra... Total: $' + total);
                
            } else {
                alert('Tu cesta está vacía.');
            }
        }
    </script>
    </div>    
    <?php
    require_once("footer.php");
    ?>
</body>

</html>