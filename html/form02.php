<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <?php
    $mostrar_formulario = true;
    
    if (isset($_GET['numero'])) {
        $numero = $_GET['numero'];
        echo "<h2>Tabla de multiplicar del número $numero:</h2>";
        echo "<table border='1'>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>$numero</td><td>x</td><td>$i</td><td>=</td><td>" . ($numero * $i) . "</td></tr>";
        }
        echo "</table>";
        // Ocultar el formulario después de recibir el número
        $mostrar_formulario = false;
    }
    ?>

    <?php
    if ($mostrar_formulario) {
    ?>
    <form method="GET" action="">
        <label for="numero">Introduce un número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Mostrar tabla de multiplicar</button>
    </form>
    <?php
    } else {
    ?>
    <p><a href="form02.php">Volver al formulario</a></p>
    <?php
    }
    ?>
</body>
</html>
