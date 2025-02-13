<?php
$servername = "localhost";  // Cambiar si es necesario
$username = "root";         // Cambiar según tu configuración
$password = "1MG2024";      // Cambiar según tu configuración
$dbname = "2erronka_1";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta a la tabla produktuak
$sql = "SELECT * FROM produktuak";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1' style='background-color: white; border-collapse: collapse;'>";
    echo "<tr style='background-color: lightgray;'>
            <th>Code</th>
            <th>Name</th>
            <th>Description</th>
            <th>Category</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Actions</th>
          </tr>";
    
          while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["Kodea"] . "</td>";
            echo "<td>" . $row["Izena"] . "</td>";
            echo "<td>" . $row["Deskribapena"] . "</td>";
            echo "<td>" . $row["Kategoria"] . "</td>";
            echo "<td>" . $row["Prezioa"] . "</td>";
            echo "<td>" . $row["Stock"] . "</td>";
            echo "<td>
                    <button style='background-color: green; color: white; border: none; padding: 8px 12px; cursor: pointer; font-size: 14px; margin: 2px;'>Buy</button>
                    <button style='background-color: blue; color: white; border: none; padding: 8px 12px; cursor: pointer; font-size: 14px; margin: 2px;'>Add to Cart</button>
                  </td>";
            echo "</tr>";
        }
        
        echo "</table>";
        } else {
            echo "0 resultados";
        }

$conn->close();
?>