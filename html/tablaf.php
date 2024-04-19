<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <?php
    // Comprueba si no se ha enviado un número a través del formulario
    if (empty($_POST['numero'])) {
        // Si no se ha enviado un número, muestra el formulario para introducirlo
    ?>
    <form method="POST" action="">
        <label for="numero">Introduce un número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Mostrar tabla de multiplicar</button>
    </form>
    <?php
    } else {
        // Si se ha enviado un número, muestra la tabla de multiplicar
        $numero = $_POST['numero'];
        echo "<h2>Tabla de multiplicar del número $numero:</h2>";
        echo "<table border='1'>";
        // Genera las filas de la tabla de multiplicar
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>$numero</td><td>x</td><td>$i</td><td>=</td><td>" . ($numero * $i) . "</td></tr>";
        }
        echo "</table>";
        // Muestra un enlace para volver al formulario
        echo "<p><a href='tablaf.php'>Volver al formulario</a></p>";
    }
    ?>
</body>
</html>
