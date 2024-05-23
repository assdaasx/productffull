<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Tienda</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/scripts.js"></script>
</head>
<body>
    <header>
        <h1>Bienvenido a Mi Tienda</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="producto.php">Productos</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Nuestros Productos</h2>
        <div class="productos">
            <?php
            // Conectar a la base de datos y obtener productos
            $conn = new mysqli('localhost', 'usuario', 'contraseña', 'mi_tienda');
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }
            $sql = "SELECT id, nombre, precio, imagen FROM productos";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='producto'>";
                    echo "<img src='images/" . $row["imagen"] . "' alt='" . $row["nombre"] . "'>";
                    echo "<h3>" . $row["nombre"] . "</h3>";
                    echo "<p>$" . $row["precio"] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "0 productos";
            }
            $conn->close();
            ?>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Mi Tienda</p>
    </footer>
</body>
</html>
