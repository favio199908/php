<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <?php
    if (isset($_GET['numero'])) {
        $numero = $_GET['numero'];
        echo "<h2>Tabla de multiplicar del número $numero:</h2>";
        echo "<table border='1'>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>$numero</td><td>x</td><td>$i</td><td>=</td><td>" . ($numero * $i) . "</td></tr>";
        }
        echo "</table>";
        // Mostrar solo el enlace para volver
        echo "<p><a href='form03.php'>Volver al formulario</a></p>";
    } else {
    ?>
    <form method="GET" action="">
        <label for="numero">Introduce un número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Mostrar tabla de multiplicar</button>
    </form>
    <?php
    }
    ?>
</body>
</html>
